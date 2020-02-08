

$(document).ready(function(){
    $.ajax({
        url:api_base_url+'/admin/check',
        data:{token:$.cookie('token')},
        statusCode:{
            401: function(){
                location.replace(frontEnd_base_url+"/");
            },
            200:function(){
                console.log('success');
            }
        }
    })
})