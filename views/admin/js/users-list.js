$(function () {
    $('#user-information-table').DataTable({
      "paging": true,
      "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "ajax":{
        "url":api_base_url+'/admin/all/user?token='+$.cookie('token'),
      },
    //   "responsive": true
    });
});

function show(id){
    console.log(id);
    $.ajax({
        url:api_base_url+'/admin/edit/user/info/show/'+id,
        data:{token:$.cookie('token')},
        success:function(result){
            console.log(result);

            $('.profile-name').html(result.name);
            $('.profile-bg').html(result.blood_group);
            $('.profile-email').html(result.email);
            $('.profile-phone').html(result.phone);
            $('.profile-address').html(result.address);
            $('.profile-role').html(result.role);
            
        }
    })
}
function edit(id){    
    console.log(id);

    $.ajax({
        url:api_base_url+'/admin/edit/user/info/show/'+id,
        data:{token:$.cookie('token')},
        success:function(result){
            console.log(result);
            $('#user_Name').val(result.name);
            $('#user_email').val(result.email);
            $('#user_phone').val(result.phone);
            $('#user_location').val(result.address);
            $('#user_BloodGroup').val(result.blood_group);
            $("#user_id").val(id);
            if(result.role == 'admin'){
                $('#admin').attr('selected','true')
            }else{
                $('#user').attr('selected','true')
            }
        }
    })
}
function changepass(id){
    $("#user_id_changepass").val(id);
}


$('#update_profile').click(function(){
        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        var id = $("#user_id").val();
        var data = {
            name:$('#user_Name').val(),
            email:$('#user_email').val(),
            phone:$('#user_phone').val(),
            address:$('#user_location').val(),
            blood_group:$('#user_BloodGroup').val(),
            role:$('#user_role').val(),
            token:$.cookie('token')
         }
        
        $.ajax({
            url:api_base_url+'/admin/edit/user/info/'+id,
            type:'post',
            data:data,
            success:function(result){
                Toast.fire({
                    type: 'success',
                    title: result.message
                })
                console.log(result);
            }
        })
    }

)
$('#update_password').click(function(){
        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        var id = $("#user_id_changepass").val();
        var data ={
            password:$("#password").val(),
            token:$.cookie('token')
        };
    
        $.ajax({
            url:api_base_url+'/admin/edit/user/password/'+id,
            data:data,
            type:'post',
            success:function(result){
                Toast.fire({
                    type: 'success',
                    title: result.message
                })
            }
        })
    }

)
