
var email;
var next_step = {
    permission : function(access){
        var parmit = access; 
        $("#next").attr('disabled',false);
        if(parmit == true){
            $('#next').click(function () {
                var email = $('#email_id').val()
                $('#approved_email_id').val(email);
                $('#email').hide();
                $('#password').fadeIn('slow');
                $('#footer-note').hide();
                $('#footer-note').html('Enter your password to logIn');
                $('#footer-note').fadeIn('slow');
            });
        }
    },
    success_message : function(message) {
        $('#footer-note').html(message);
    },
    error_message : function(message) {
        $('#footer-note').html(message);
    },
    sendEmail:function(emailSent){
        $('#email').hide('slow');
        $('#footer-note').hide('slow');
        $('#footer-note-body').hide('slow');
        if(emailSent == false){
            $('#loader').fadeIn('slow');
        }else{
            $('#loader').hide('slow');
            $('#email_send_massage').fadeIn('slow');
        }
        $('.login-logo').hide('slow');
    },
    
        
}

function request(){
    let email_id = $('#email_id').val();
    next_step.sendEmail(false);
    $.ajax({
        url: api_base_url+"/send/email/verification",
        type:'post',
        data:{email:email_id,url:frontEnd_base_url},
        success: function(result){
            next_step.sendEmail(true)
        },
    });
     
}

$(document).ready(function () {
    
    $('#password').hide();
    $('#email_send_massage').hide();
    $('#loader').hide();
    $('#next').attr('disabled',true);
    
    $("#email_id").keyup(function(){
            var email_id = $(this).val();
            $.ajax({
            url: api_base_url+"/check/email/login/permission?email="+email_id,
            type:'post',
            success: function(result){
                next_step.success_message('you can logIn');
                next_step.permission(true);
                email = email_id;
            },
            statusCode: {
                401: function (response) {
                    $('#next').attr('disabled',true);
                    next_step.success_message('unknow email ID');
                },
                403: function (response) {
                    $('#next').attr('disabled',true);
                    next_step.success_message('<button type="button" onclick="request()" id="request_button" class="btn btn-info">request for activation link</button>');
                    
                }
            }
        });
    });


    
    $("#login").click(function(){
        var password = $('#submit_password').val();
        var redirect_page = $('#redirect_page').val();
        next_step.success_message('<img src="'+frontEnd_base_url+'/dist/img/loader/loader2.gif" style="hight:50px;width:200px">');
        $.ajax({
            url: api_base_url+"/auth/login?email="+email+"&password="+password,
            type:'post',
            success: function(result){
                $.cookie('token', result.token, { expires: 1, path: '/' });
                next_step.success_message('success');
                if(redirect_page == "user"){
                    window.location = frontEnd_base_url+"/views/user/index.php";
                }else{
                    window.location = frontEnd_base_url+"/views/admin/index.php";
                }
            },
            statusCode: {
                404: function (response) {
                    next_step.error_message('incorrect password');
                }
            }
        })
    });

    

    
});

