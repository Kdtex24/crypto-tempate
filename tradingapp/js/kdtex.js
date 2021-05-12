$(function(){

    $('#example23').dataTable();
    $('#registerForm').submit(function(event){
        event.preventDefault();
        var name = $('#name').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var pwd = $('#pwd').val();
        

        if(name.length <= 0){
            swal("Error!!!", "name can not be empty", "error");
        }else if(email.length <= 0){
            swal("Error!!!", "email can not be empty", "error");
        }else if(username.length <= 0){
            swal("Error!!!", "username can not be empty", "error");
        }else if(pwd.length <= 0){
            swal("Error!!!", "password can not be empty", "error");
        }else{
            $.ajax({
                url: "inc/register",
                method: 'POST',
                cache: false,
                dataType: 'JSON',
                data: {name: name, username: username, email: email, pwd: pwd},
                beforeSend: function(xhr){
                    $('#registerBtn').html('<i class="fa fa-refresh fa-spin"> </i> Registering');
                    $('#registerBtn').attr("disabled", true);
                },
                success: function(data, textStatus, jqXHR){
                    if(data.success === true){
                        swal("Success!!!", username + ", you have Successfully registered on 247smartnet.online, You will be redirected to your Dashboard For account funding", "success").then(function(){
                            console.log("DOnmeeee");
                            window.location.href = "user-dashboard";
                        });
                        $('#registerBtn').html('<i class="fa fa-sign-in"> </i> Register');
                    }else{
                        $('#registerBtn').html('<i class="fa fa-sign-in"> </i> Register');
                        $('#registerBtn').removeAttr("disabled");
                        swal("Error!!!", email + " exist already, try another!", "error");
                    }
                },
                error: function(){
                    $('#registerBtn').html('<i class="fa fa-sign-in"> </i> Register');
                    $('#registerBtn').removeAttr("disabled");
                    swal("Error!!!", "Please refresh this page and try again!!!", "error");
                }
            });
        }
    });

    $('.removeBtn').click(function(){
        var email = $(this).attr('email');
        var button = $(this);
        $.ajax({
            url: "inc/register",
            method: 'POST',
            cache: false,
            dataType: 'JSON',
            data: {delete: "true", email: email},
            beforeSend: function(xhr){
                button.html('<i class="fa fa-refresh fa-spin"></i> Removing...');
                button.attr("disabled", true);
            },
            success: function(data, textStatus, jqXHR){
                if(data.success === true){
                    button.html('<i class="fa fa-trash"> </i> Removed');
                }else{
                    button.removeAttr("disabled");
                    button.html('<i class="fa fa-trash"> </i> Error, try again!');
                }
            },
            error: function(){
                button.removeAttr("disabled");
                button.html('<i class="fa fa-trash"> </i> Error, try again!');
            }
        });
    });
    $('.approveBtn').click(function(){
        var email = $(this).attr('email');
        var button = $(this);
        $.ajax({
            url: "inc/register",
            method: 'POST',
            cache: false,
            dataType: 'JSON',
            data: {approve: "true", email: email},
            beforeSend: function(xhr){
                button.html('<i class="fa fa-refresh fa-spin"></i> Approving...');
                button.attr("disabled", true);
            },
            success: function(data, textStatus, jqXHR){
                if(data.success === true){
                    button.html('<i class="fa fa-check"> </i> Approved');
                }else{
                    button.removeAttr("disabled");
                    button.html('<i class="fa fa-check"> </i> Error, try again!');
                }
            },
            error: function(){
                button.removeAttr("disabled");
                button.html('<i class="fa fa-check"> </i> Error, try again!');
            }
        });
    });

});

