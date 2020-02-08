let errorDisplay = {
    errorMassage:function(data,errorclass,key){
        let name = "user_"+key;
        for (const key in data) {
            if (data.hasOwnProperty(key)) {
                console.log(name);
                document.getElementById(errorclass).innerHTML = data[key]
                document.getElementById(errorclass).classList.add('text-danger')
                document.getElementById(name).classList.add('is-invalid');

            }
        }
        
    }
}


$("#store_user").click(function(){
        
        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var name = $('#user_name').val();
        var email = $('#user_email').val();
        var phone = $('#user_phone').val();
        var location = $('#user_address').val();
        var BloodGroup = $('#user_blood_group').val();
        var donotion_date = $('#user_donotion_date').val();
        var password = $('#user_password').val();

        var data = { 
            token: $.cookie('token'),
            name: name,
            email: email,
            phone: phone,
            address: location,
            blood_group: BloodGroup,
            latest_donotion_date: donotion_date,
            password: password,
        }

        $.ajax({
            url:api_base_url+'/admin/store/user',
            type:'post',
            data:data,
            success:function(result){},
            statusCode: {
                200: function (response) {
                    Toast.fire({
                        type: 'success',
                        title: 'successfully stored.'
                    })
                    $('.form-horizontal')[0].reset()
                },
                203: function (error) {
                    Toast.fire({
                        type: 'warning',
                        title: 'Invalide Input.'
                    })
                    
                    console.log(Object.keys(error));

                    for (const key in error) {
                        if (error.hasOwnProperty(key)) {
                             let errorclass = key+'_error'
                             errorDisplay.errorMassage(error[key],errorclass,key);
                             console.log(error[key],errorclass,key);
                            
                        }
                    }


                }
            }
        })

    }
)

$("#input_file").on("change", function (e) {
    $('#file_upload_massage').html('<img src="'+api_base_url+'/dist/img/loader/load-file.gif" style="hight:50px;width:200px">')
    var file = e.target.files[0];
    if (!file) return;
    var FR = new FileReader();
    FR.onload = function(e) {
      var data = new Uint8Array(e.target.result);
      var workbook = XLSX.read(data, {type: 'array'});
      var firstSheet = workbook.Sheets[workbook.SheetNames[0]];
      var result = XLSX.utils.sheet_to_json(firstSheet, { header: 1 });

      result.forEach( element => {

        let data = {
            name:element[0],
            email:element[1],
            phone:element[2],
            address:element[3],
            blood_group:element[4],
            token: $.cookie('token'),
            password: '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        }
        $.ajax({
            url:api_base_url+'/admin/store/user',
            type:'post',
            data:data,
            success:function(result){
                $('#file_upload_massage').html('Successfully uploaded')
                // window.location.reload();
            }
        })

      });
      
    };
    FR.readAsArrayBuffer(file);
 });