let frontEnd_base_url ='';
let api_base_url = "http://www.bloodbank.api";
let admin_pannel_url = "http://www.bloodbank.admin";
let user_pannel_url = "http://www.bloodbank.com";
var token = $.cookie('token');

$('document').ready(function(){
    
    var path = window.location.host;
    if(path.search('admin')>=0){
        frontEnd_base_url = admin_pannel_url;
    }else{
        frontEnd_base_url = user_pannel_url;
    }

    let w = window.innerWidth
    if(w<=1000){
        $('.brand-text').html('BS23 BloodBank')
    }

})




let user_profile_ajax={
    call:function (data,url) {

        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        
        $.ajax({
            url: api_base_url+url,
            type:'post',
            data:data,
            success:function (result) {
                Toast.fire({
                    type: 'success',
                    title: result.massage
                })
                if( url.search('password') >0 || url.search('date') > 0 ){
                    $('#changePassword_form')[0].reset();
                    $('#updateLastDonotionDate_form')[0].reset();
                }
            },
            statusCode:{
                203:function(error){
                    Toast.fire({
                        type: 'error',
                        title: error.massage
                    })
                }
            }
        })
    }
}


$(document).ready(function(){

    var url = window.location.href;
    if((url.search('token'))>0){
        $('#profile_tab_button').removeClass('active');
        $('#change_password_button').addClass('active');
        $('#profile').removeClass('active');
        $('#changePassword').addClass('active');
    }
    
})