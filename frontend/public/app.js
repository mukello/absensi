


$(".toggle-Cpassword").click(function() {
    var x = document.getElementById("current_password");
    var element = document.getElementById("password-field");
    

    if (x.type === "password") {
        x.type = "text";
        element.classList.remove("fa-eye-slash");
        element.classList.add("fa-eye");
    } else {
        x.type = "password";
        element.classList.add("fa-eye-slash");
        element.classList.remove("fa-eye");
    }   
});

$(".toggle-Npassword").click(function() {
    var x = document.getElementById("new_password");
    var element = document.getElementById("password-field2");
    

    if (x.type === "password") {
        x.type = "text";
        element.classList.remove("fa-eye-slash");
        element.classList.add("fa-eye");
    } else {
        x.type = "password";
        element.classList.add("fa-eye-slash");
        element.classList.remove("fa-eye");
    }   
});

$(".toggle-Rpassword").click(function() {
    var x = document.getElementById("retype_password");
    var element = document.getElementById("password-field3");
    

    if (x.type === "password") {
        x.type = "text";
        element.classList.remove("fa-eye-slash");
        element.classList.add("fa-eye");
    } else {
        x.type = "password";
        element.classList.add("fa-eye-slash");
        element.classList.remove("fa-eye");
    }   
});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var lat = document.getElementById("lat").value = position.coords.latitude;
    var long = document.getElementById("long").value = position.coords.longitude;  
}



$('body').on('click', '.btn-save-profile', function(e){
    e.preventDefault();

    var form = $('#form-body form'),
        url = form.attr('action'),
        nip = $('#nip').val(),
        method = form.attr('method');

    
    $.ajax({
        url : url,
        method : method,
        data : form.serialize(),
        beforeSend: function(){
            $('#toast-1').toast('show');
            
        },
        success : function(response){
            $('#menu-success-profile').showMenu();
        },
        error : function(e){
            if (e.responseJSON.errors.email) {
                document.getElementById("ErrorEmailInput").style.display = "block";
            }

            if(e.responseJSON.errors.phone_number){
                document.getElementById("ErrorTelpInput").style.display = "block";
            }

            if(e.responseJSON.errors.ktp_number){
                document.getElementById("ErrorKTPInput").style.display = "block";
            }

            if(e.responseJSON.errors.kk_number){
                document.getElementById("ErrorKKInput").style.display = "block";
            }
        
            $('#menu-warning-email').showMenu();

        },
        complete:function(data){
            // Hide image container
            $('#toast-1').toast('hide');
        }
    });

});


$('body').on('click', '#btn-login', function(e){
    e.preventDefault();

    var form = $('#form-login form'),
        url = form.attr('action'),
        method = form.attr('method'),
        email = $('#email').val(),
        password = $('#password').val(),
        message_fail = document.getElementsByClassName("message-failed"),
        message_success = document.getElementsByClassName("message-success");
        message_info = document.getElementsByClassName("message-info");

    if (email == "" || password == "") {
        $('#notification-1').toast('show');

    }else{
        $.ajax({
            url : url,
            method : method,
            data : form.serialize(),
            beforeSend: function(){
                $('#toast-1').toast('show');
            },
            success : function(response){
                $('#notification-2').toast('show');
                setInterval(function () {
                    window.location = "/home";
                }, 2000);
                
            },
            error : function(e){
                $('#notification-3').toast('show');
            },
            complete:function(data){
            // Hide image container
            $('#toast-1').toast('hide');
           }
        });
    }
});

$('body').on('click', '#btn-tap-attand', function(e){
    e.preventDefault();
    

    $('#menu-tips-2').showMenu();

});

$('body').on('click', '#btn-go', function(e){
    e.preventDefault();

    window.location.reload();

});



$('body').on('click', '.attandance_now', function(e){
    e.preventDefault();

    var form = $('#form-body form'),
        url = form.attr('action'),
        method = form.attr('method');
    
    $.ajax({
        url : url,
        method : method,
        data : form.serialize(),
        beforeSend: function(){
            $('#menu-tips-2').hideMenu();
            $('#toast-1').toast('show');
            
        },
        success : function(response){
            $('#menu-tips-2').hideMenu();
            $('#menu-success-1').showMenu();
        },
        error : function(e){
            $('#menu-tips-2').hideMenu();
            $('#menu-warning-1').showMenu();
        },
        complete:function(data){
            // Hide image container
            $('#toast-1').toast('hide');
        }
    });

});




$('body').on('click', '.modal-show', function(e){
    e.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title'),
        id = me.data('id');
    
    $('#modal-title').text(title);
    $('#modal-btn-save').removeClass('hide').text(me.hasClass('edit') ? 'Update' : 'Create');
    
    $.ajax({
        url: url,
        dataType: 'html',
        success: function(response)
        {
            $('#modal').modal('show');
            $('#modal-body').html(response);
            
        },
        error : function(error)
        {
            $('#modal').modal('hide');
            swal({
                type : 'error',
                title : 'Error 401',
                text : 'Unauthorized action'
            });
        }
    });

});


$('#modal-btn-save').click(function(e){
    e.preventDefault();

    var form = $('#modal-body form'),
        url = form.attr('action'),
        method = $('input[name=_method]').val() == undefined ? 'post' : 'put';


    form.find('.help-block').remove();
    form.find('.form-group').removeClass('has-error');
    
    $.ajax({
        url : url,
        method : method,
        data : form.serialize(),
        success : function(response){
            $('#modal').modal('hide');
            $('#datatable').DataTable().ajax.reload();
            
            swal({
                type : 'success',
                title : 'Success',
                text : 'Saved'
            });
        },
        error : function(e){
            console.log('error : '+e);
            var response = e.responseJSON;
            // console.log(response);
            if($.isEmptyObject(response) == false)
            {
                $.each(response.errors, function(key, value) {
                    $('#' + key)
                        .closest('.form-group')
                        .addClass('has-error')
                        .append('<span class="help-block">'+ value +'</span>')
                });
            }
        }
    });
});

$('body').on('click', '.btn-show', function(e){
    e.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title'); 

    $('#modal-title').text(title);
    $('#modal-btn-save').addClass('hide');

    $.ajax({
        url :url,
        dataType : 'html',
        success : function(response){
            $('#modal').modal('show');
            $('#modal-body').html(response);
        },
        error : function(error)
        {
            $('#modal').modal('hide');

            if(error.status == 403){

                swal({
                    type : 'error',
                    title : 'Error 403',
                    text : 'Unauthorized action'
                });

            }else{

                swal({
                    type : 'error',
                    title : 'Error 500',
                    text : 'Internal server error'
                });

            }
        }
    });

});

$('body').on('click', '.btn-delete', function(e){
    e.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

        // alert(csrf_token);
    
    swal({
        title : 'Are you sure '+title+' ?',
        type : 'warning',
        showCancelButton : true,
        confirmButtonColor : '#3085d6',
        cancelButtonColor : '#d33',
        confirmButtonText : 'Ya, hapus!'
    }).then((result)=>{
        if(result.value){
            $.ajax({
                url : url,
                type : 'post',
                data : {
                    '_method': 'DELETE',
                },
                success : function(r){
                    $('#datatable').DataTable().ajax.reload();
                    
                    swal({
                        type : 'success',
                        title : 'Success',
                        text : 'Data successfully deleted'
                    });
                },
                error : function(er){
                    if(er.status == 403){

                        swal({
                            type : 'error',
                            title : 'Error 403',
                            text : 'Unauthorized action'
                        });

                    }else{

                        swal({
                            type : 'error',
                            title : 'Failed',
                            text : 'Data gagal dihapus'
                        });
                        
                    }
                        
                }
            });
        }
    });

});

$('body').on('click', '.btn-delete2', function(e){
    e.preventDefault();

    var link = $(this).attr('href');

    swal({
        title : 'Are you sure?',
        type : 'warning',
        showCancelButton : true,
        confirmButtonColor : '#3085d6',
        cancelButtonColor : '#d33',
        confirmButtonText : 'Yes'
    }).then((result)=>{
        if(result.value){
            window.location = link;
            
        }
    });

});

$('body').on('click', '.set-active', function(e){
    e.preventDefault();

    var link = $(this).attr('href');

    swal({
        title : 'Are you sure want to set active?',
        type : 'warning',
        showCancelButton : true,
        confirmButtonColor : '#3085d6',
        cancelButtonColor : '#d33',
        confirmButtonText : 'Yes'
    }).then((result)=>{
        if(result.value){
            $.ajax({
                url : link,
                type : 'get',
                data : {
                    
                },
                success : function(r){
                    
                    swal({
                        type : 'success',
                        title : 'successfully set to active',
                    });

                    window.location.reload();
                },
                error : function(er){
                    swal({
                        type : 'error',
                        title : 'Failed',
                        text : 'Failed to set active!'
                    });
                        
                }
            });
        }
    });

});

$('body').on('click', '.set-active2', function(e){
    e.preventDefault();

    var link = $(this).attr('href');

    swal({
        title : 'Are you sure want to set active?',
        type : 'warning',
        showCancelButton : true,
        confirmButtonColor : '#3085d6',
        cancelButtonColor : '#d33',
        confirmButtonText : 'Yes'
    }).then((result)=>{
        if(result.value){
            $.ajax({
                url : link,
                type : 'get',
                data : {
                    
                },
                success : function(r){
                    $('#datatable').DataTable().ajax.reload();
                    swal({
                        type : 'success',
                        title : 'successfully set to active',
                    });

                },
                error : function(er){
                    swal({
                        type : 'error',
                        title : 'Failed',
                        text : 'Failed to set active!'
                    });
                        
                }
            });
        }
    });

});

