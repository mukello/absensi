@extends('base.main')
@section('title_page') Change Password @endsection
@section('content')
    <div class="card card-style mt-5">
        <div class="content mb-3">
            <h2 class="font-700 mb-0">Change Password</h2>
            <p class="font-11 mb-3">
                Let's get you back into your account. Manage your password!
            </p>
        
        <div id="form-body-change-password">
            <form method="post" action="{{ route('profile.actionPassword') }}">
            @csrf

            <div class="input-style has-icon input-style-1">
                <input type="password" id="current_password" name="current_password" placeholder="Current password">
                <i class="fa fa-fw fa-clock field-icon2" id="input-icon1"></i>
                <i id="password-field" class="fa fa-fw fa-eye-slash field-icon toggle-Cpassword"></i>
            </div>

            <div class="input-style has-icon input-style-1 ">
                <input type="password" id="new_password" name="new_password" placeholder="New password">
                <i class="fa fa-fw fa-lock field-icon2" id="input-icon1"></i>
                <i id="password-field2" class="fa fa-fw fa-eye-slash field-icon toggle-Npassword"></i>
            </div>

            <div class="input-style has-icon input-style-1 ">
                <input type="password" id="retype_password" name="retype_password" placeholder="Password confirmation">
                <i class="fa fa-fw fa-lock field-icon2" id="input-icon1"></i>
                <i id="password-field3" class="fa fa-fw fa-eye-slash field-icon toggle-Rpassword"></i>
            </div>

            <br>

            <button style="border: none;" id="change_password" class="btn btn-full btn-block btn-m shadow-l rounded-s bg-highlight text-uppercase font-900 top-20">Change Password</button>
            </form>
        </div>
        </div>
    </div>
        
@endsection
@push('scripts')
<script type="text/javascript">
    // ====================================================
           // * Change Password * //
// ====================================================

$('body').on('click', '#change_password', function(e){
    e.preventDefault();

    var _token = "{{ csrf_token() }}";
    var minLength = 5;

    var form = $('#form-body-change-password form'),
        url = form.attr('action'),
        Cpassword = $('#current_password').val(),
        Npassword = $('#new_password').val(),
        Rpassword = $('#retype_password').val(),
        method = form.attr('method');

        

    if (Cpassword == "" || Npassword == "" || Rpassword == "") {

        $('#notification-1').toast('show');

    }else if(Npassword.length < minLength){

        $('#notif-minlength').toast('show');

    }else if(Npassword != Rpassword){

        $('#notification-not-match').toast('show');

    }else{
        $.ajax({
            url : '{{ route('profile.checkPassword') }}',
            method : 'post',
            data : { Cpassword, _token },

            success : function(response){
                
                if(response.message == "success"){
                    actionChangePassword();
                }else{
                    $('#notification-correct').toast('show');
                }
                
            },
            error : function(e){
                $('#notification-ajax-error').toast('show');
            }
            
        });
    }

    function actionChangePassword()
    {

        var form = $('#form-body-change-password form'),
            url = form.attr('action'),
            Cpassword = $('#current_password').val(),
            Npassword = $('#new_password').val(),
            Rpassword = $('#retype_password').val(),
            _token = "{{ csrf_token() }}",
            method = form.attr('method');


        $.ajax({
            url : '{{ route('profile.actionPassword') }}',
            method : 'post',
            data : { Cpassword, Npassword, Rpassword, _token },

            success : function(response){
                
                if(response.message == "success"){
                    $('#notification-success-Cpassword').toast('show');
                    setInterval(function () {
                        window.location = "/settings";
                    }, 2000);

                }else{
                    $('#notification-failed-Cpassword').toast('show');
                }
                
            },
            error : function(e){
                $('#notification-ajax-error').toast('show');
            }
            
        });
    }



});
</script>
@endpush