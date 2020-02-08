$('#request_new_password').click(function(){
    var data ={
        email:$('#recovery_emailID').val(),
        url:frontEnd_base_url+'/views/login/recover-password.php',
        base_url:frontEnd_base_url 
    }

    $('#footer-note').html('<img src="'+frontEnd_base_url+'/dist/img/loader/loader2.gif" style="hight:50px;width:200px">')
    
    $.ajax({
        url:api_base_url+"/forget/password/email",
        data:data,
        success:function(){
            $('.request_for_change_password_form')[0].reset()
            $('#footer-note').html('check your email for password reset link');
        },
        statusCode:{
            401:function(){
                $('#footer-note').html('Email does not exist');
            }
        }
    })
})

$("#reset_password_button").click(function(){

    let password = $("#recover_password").val()
    let confirm_password = $("#recover_confirm_password").val()
    let token = $("#token").val()
    let user_id = $("#user_id").val()
    if(password == confirm_password){
        let data = {
            password:password,
            token:token,
            id:user_id,
            base_url:frontEnd_base_url 
        }
        $.ajax({
            url:api_base_url+'/change/possword',
            type:'post',
            data:data,
            success:function(result){
                $('#footer-note').html("success");
                $('.change_password_form')[0].reset();
            },
            statusCode:{
                403:function(){
                    $('#footer-note').html('token not matched');
                    $('.change_password_form')[0].reset();
                },
                205:function(){
                    $('#footer-note').html('successfully changed password');
                }
            }

        })
    }else{
        $('#footer-note').html('password not matched');
    }

})