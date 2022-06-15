@extends('home.layouts.master')

@section('content')
    <main class="login-section">
        <div class="container d-flex justify-content-center align-content-center">

            <form id="loginForm" class="me-auto">

                <img src="{{ asset('images/logo-white.svg') }}" alt="logo">

                <h5>ورود | ثبت‌نام</h5>

                <p class="text-secondary">سلام!
                    <br>
                    لطفا شماره موبایل خود را وارد کنید
                </p>

                <div class="field-wrap">

                    <input id="phoneInput" placeholder="۰۹۱۲۱۱۱۲۲۳۳" type="text" />
                </div>


                <div id="errorPhone" class="input-error-validation">

                    <p style="color: red" id="errorText"></p>

                </div>


                <button class="secondary-btn loading-btn">ادامه</button>

            </form>

            <form id="OTPinput" class="me-auto">
                <img src="{{ asset('images/logo-white.svg') }}" alt="logo">

                <h5>ورود | ثبت‌نام</h5>

                <p class="text-secondary">سلام!
                    <br>
                    لطفا کد ارسال شده را وارد کنید
                </p>

                <div class="field-wrap">

                    <input id="codeInput" placeholder="----" type="text" />
                </div>

                <div id="errorCode" class="input-error-validation">

                    <p style="color: red" id="errorOtpText"></p>

                </div>


                <button class="secondary-btn">ورود</button>

                <div>

                    <button id="resendOtpButton" class="secondary-btn">ارسال مجدد</button>
                    <span id="resendTimer"></span>

                </div>

            </form>

        </div>
    </main>
@endsection

@section('js')
    <script>
        let logintoken;

        $('#OTPinput').hide();
        $('#resendOtpButton').hide();

        $('#loginForm').submit(function(event) {

            console.log($('#phoneInput').val());
            event.preventDefault();

            $.post("{{ url('/login') }}", {

                '_token': "{{ csrf_token() }}",
                'cellphone': $('#phoneInput').val()

            }, function(response, status) {
                console.log(response, status);
                logintoken = response.login_token;
                $('#loginForm').fadeOut();
                $('#OTPinput').fadeIn();
                timer();

            }).fail(function(response) {

                console.log(response.responseJSON);
                $('#errorPhone').fadeIn();
                $('#errorText').html(response.responseJSON.errors.cellphone[0]);

            })

        });

        $('#resendOtpButton').click(function(event) {

            console.log($('#phoneInput').val());
            event.preventDefault();

            $.post("{{ url('/resend') }}", {

                '_token': "{{ csrf_token() }}",
                'login_token': logintoken

            }, function(response, status) {
                console.log(response, status);
                logintoken = response.login_token;
                $('#resendOtpButton').fadeOut();
                timer();
                $('#resendTimer').fadeIn();


            }).fail(function(response) {

                console.log(response.responseJSON.errors.cellphone[0]);
                $('#errorPhone').fadeIn();
                $('#errorText').html(response.responseJSON.errors.cellphone[0]);

            })

        });


        $('#OTPinput').submit(function(event) {

            console.log($('#codeInput').val());
            event.preventDefault();

            $.post("{{ url('/checkOtp') }}", {

                '_token': "{{ csrf_token() }}",
                'otp': $('#codeInput').val(),
                'login_token': logintoken

            }, function(response, status) {
                console.log(response, status);
                logintoken = response.login_token;

                $(location).attr('href', "{{ route('home.index') }}");
                // $('#loginForm').fadeOut();
                // $('#OTPinput').fadeIn();

            }).fail(function(response) {

                console.log(response.responseJSON.errors);
                $('#errorCode').fadeIn();
                $('#errorOtpText').html(response.responseJSON.errors.otp[0]);

            })

        });

        function timer() {
            let time = "0:59";
            let interval = setInterval(function() {
                let countdown = time.split(':');
                let minutes = parseInt(countdown[0], 10);
                let seconds = parseInt(countdown[1], 10);
                --seconds;
                minutes = (seconds < 0) ? --minutes : minutes;
                if (minutes < 0) {
                    clearInterval(interval);
                    $('#resendTimer').hide();
                    $('#resendOtpButton').fadeIn();
                };
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                //minutes = (minutes < 10) ?  minutes : minutes;
                $('#resendTimer').html(minutes + ':' + seconds);
                time = minutes + ':' + seconds;
            }, 1000);
        }

        $(function() {

            var twoToneButton = document.querySelector('.loading-btn');

            twoToneButton.addEventListener("click", function() {
                twoToneButton.innerHTML = "ادامه";
                twoToneButton.classList.add('spinning');

                setTimeout(
                    function() {
                        twoToneButton.classList.remove('spinning');
                        twoToneButton.innerHTML = "ادامه";

                    }, 3000);
            }, false);

        });
    </script>
@endsection
