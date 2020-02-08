$(document).ready(function () {
    
    $("#logout").click(function(){
        $.ajax({
            url: api_base_url+"/logout?token="+$.cookie('token'),
            type:'post',
            success: function(result){
                $.removeCookie('token', { path: '/' });
                localStorage.clear();
                var path = window.location.pathname;
                console.log(path.search('admin'));
                if(path.search('admin')>0){
                    window.location = frontEnd_base_url+"";
                }else{
                    window.location = frontEnd_base_url+"";
                }

            },
            statusCode: {
                404: function (response) {
                    next_step.error_message('text-danger','incorrect password');
                }
            }
        })
    });

});