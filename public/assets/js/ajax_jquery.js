$(document).ready(function(){
    var successAlert = `
        <div id="userFormAlert" class="alert alert-success alert-dismissible fade mb-1 show" role="alert">
            <strong>Success: </strong> <span id="userFormStatus">Show your MSG here.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`;
    $.ajax({
        type: 'GET',
        url: '/user/get-all-users',
        success:function(data){
            if(data.user_data.length > 0){
                $.each(data.user_data, function(index, value) {
                    $('#tableBody').append(`<tr>
                        <td>`+(value['user_id'])+`</td>
                        <td>`+(value['first_name'])+`</td>
                        <td>`+(value['last_name'])+`</td>
                        <td>`+(value['email'])+`</td>
                        <td>`+(value['gender'])+`</td>
                        <td>`+(value['age'])+`</td>
                        <td>
                            <button id="userDelete"  data-id="`+(value['user_id'])+`" href="#" class="btn btn-danger">Delete</button>
                            <button id="userMail" data-id="`+(value['user_id'])+`" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" class="btn btn-primary" data-bs-whatever="@mdo">Mail</button>
                        </td>
                        </tr>` 
                    )});
                    // Bind click event to open the modal and set user_id dynamically
                    $('#tableBody').on('click', '#userMail', function() {
                        var user_id = $(this).attr('data-id');  // Get the user ID from the data-id attribute
                        $('#user-id').val(user_id);  // Set the user ID in the hidden input field in the modal form
                    });
            }else{
                $('#tableBody').append('<tr><td colspan="7" class="table-active" style="padding-left: 43%;">Data Not Found</td></tr>');
            }
        },
        error:function(e){
            console.log(e.responseText);
        }
        // data: data,
        // success: function(data) {
        //     $('#userFormAlert').toggleClass('show');
        //     $('#userFormStatus').text(data.res);
        //     $('#formSubmitBtn').prop('disabled',false);
        // }
        // error: function(e) {
        //     console.log(e.responseText);
        //     $('#formSubmitBtn').prop('disabled',false);
        // }
    });

    $('#user-table').on("click", "#userDelete", function(){
        var user_id = $(this).attr('data-id');
        var this_obj = $(this);
        $.ajax({
            type: 'GET',
            url: '/user/delete/'+user_id,
            success:function(data){
                $(successAlert).clone().appendTo('#successMsg');
                $('#successMsg').css({"position": "fixed", "right": "0", "top": "0", "z-index": "10", "width": "25%"});
                $('span, #userFormStatus').text(data.res).fadeIn();

                // Function to fade out alerts one by one
                function removeAlertsSequentially() {
                    // Select all alerts
                    let alerts = $('.alert-success');
                    
                    // Loop through each alert and remove it one by one
                    alerts.each(function(index, alert) {
                        // Set a delay for each alert
                        setTimeout(function() {
                            $(alert).fadeOut();
                        }, index * 7000); // Delay is based on index (3 seconds for each alert)
                    });
                }
                // Call the function to remove the alerts sequentially
                removeAlertsSequentially();
                
                $(this_obj).parent().parent().remove();
                // $('#userFormAlert').addClass('show');
            },
            error:function(data){
                console.log(data.responseText);
            }
        });
    });

    $('#userForm').submit(function(event){
        event.preventDefault();
        
        var form = $('#userForm')[0];
        var data = new FormData(form);

        $('#formSubmitBtn').prop('disabled',true);
        $.ajax({
            type: 'POST',
            url: '/user/form',
            data: data, 
            processData:false,  
            contentType:false,  
            success: function(data) {
                $(successAlert).clone().prependTo('#navBar');
                $('span, #userFormStatus').text(data.res);
                $('#formSubmitBtn').prop('disabled',false);
                // $('#userFormAlert').toggleClass('show');
            },
            error: function(e) {
                console.log(e.responseText);
                $('#formSubmitBtn').prop('disabled',false);
            }
        });

        // To load any file.
        // var $demo = $('#userFormData').load('/user/data');
        // console.log($demo);
    });
});