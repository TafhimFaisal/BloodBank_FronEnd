var ajex = {
    call:function(url){
        let query = $("#search_query").val();
        let data = {
            token:$.cookie('token'),
            query:query
        }
        $.ajax({
            url:url,
            type:'get',
            data:data,
            success:function(result){
                usersInfoDisplay(result);
            },
            statusCode:{
                401:function(){
                    location.replace(frontEnd_base_url+'/');
                }
            }
    
        }); 
    }
}

function usersInfoDisplay(result){
    let users = result.users_data;
    let paginations = result.pagination_data;
    let cards = '';
    let pagination_button = '';
    
    users.forEach(user => {
         cards += `
        <div class="col-12 col-sm-4 col-md-4">
        <div class="card bg-light">
    
            <div class="card-header text-muted border-bottom-0">
                <strong>${user.name}</strong>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                <div class="col-12">
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small mt-1"><span class="fa-li"><i class="fas fa-tint"></i></span> <b>Blood Group:</b> ${user.blood_group}</li>
                    <li class="small mt-1"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Address:</b> ${user.address}</li>
                    <li class="small mt-1"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>Email</b>: ${user.email} <br><b>Phone:</b> ${user.phone}</li>
                    </ul>
                </div>
                </div>
            </div>
    
            </div>
    
        </div>
        `;
    });

    paginations.forEach(pagination =>{
        pagination_button +=`<button onclick="pagination('${pagination.page_no}','${pagination.blood_group}')" class="page-link" >
                                ${pagination.page_no}
                            </button>`
    })
    
    $('.user_cards').html(cards); 
    $('.donors_pagination').html(pagination_button)
}

$(document).ready(function(){
    ajex.call(api_base_url+'/donors/1/all'); 
})

function pagination(value,blood_group){
    ajex.call(api_base_url+'/donors/'+value+'/'+blood_group);
}

$('.search_bloodGroup').change(function(){
    var bloodGroup = $(this).val();
    ajex.call(api_base_url+'/donors/1/'+bloodGroup); 
})

$("#search_button").click(function(){
    ajex.call(api_base_url+'/donors/1/all');
})

$("#search_query").change(function(){
    ajex.call(api_base_url+'/donors/1/all');
})

$("#search_query").keyup(function(){
    ajex.call(api_base_url+'/donors/1/all');
})




