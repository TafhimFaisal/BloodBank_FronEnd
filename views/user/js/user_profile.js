

$(document).ready(function(){
    $.ajax({
        url:api_base_url+'/user/info?token='+$.cookie('token'),
        type:'get',
        success:function(result){

            $('.profile-username').html(result.data.name);
            $('.next-donotion-date').html(result.next_donotion_date);
            $('.latest-donotion-date').html(result.latest_donotion_date);
            $('.bloodgroup').html(result.data.blood_group);
            $('.email_id').html(result.data.email);
            $('.phone').html(result.data.phone);
            $('.location').html(result.data.address);
            $('.number_of_donotion').html(result.number_of_donotion);
            
            $('#Name').val(result.data.name);
            $('#email').val(result.data.email);
            $('#phone').val(result.data.phone);
            $('#location').val(result.data.address);
            $('#BloodGroup').val(result.data.blood_group);
            
        }
    }); 
})

$(document).ready(function(){
    $.ajax({
        url:api_base_url+'/donotion/history',
        data:{token:$.cookie('token')},
        success:function(result){
            $('#user-timele').html(result);
        }
    })
})

$('#submit_updated_profile').click(function () {
    let data ={
        name: $('#Name').val(),
        phone: $('#phone').val(),
        address: $('#location').val(),
        token:$.cookie('token')
    }
    user_profile_ajax.call(data,'/update/user');
    
})

$('#change_password').click(function () {

    let data = {
        prev_password :$('#prev_password').val(),
        new_password :$('#new_password').val(),
        token:$.cookie('token')
    }
    user_profile_ajax.call(data,'/update/password');
    
})

$('#update_donotion_date_profile').click(function () {
    let time = '';
    if($('#time').val() == ''){ 
        time = '00:00:00';
    }else{
        time = $('#time').val()+':00';
    }
    let data = {
        date: $('#date').val(),
        time: time,
        token:$.cookie('token')
    }
    user_profile_ajax.call(data,'/donotion/date');
})


$('#donotion_history_tab_button').click(function(){
    $.ajax({
        url:api_base_url+'/donotion/history',
        data:{token:$.cookie('token')},
        success:function(result){
            $('#user-timele').html(result);
        }
    })

})


