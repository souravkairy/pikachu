<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Crypten – Cryptocurrency & ICO HTML Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('FrontEnd/assets/images/favicon.ico') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/all.css') }}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/nice-select.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/slick.css') }}">

    <!--====== Swiper css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/swiper.min.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/style.css') }}">


</head>

<body>

    <!--====== ERROR PART START ======-->

    <section class="error-area bg_cover"
        style="background-image: url({{ asset('FrontEnd/assets/images/login-bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="login-box">
                        <div class="login-title text-center">
                            <a href="{{ url('/') }}"> <img src="{{ asset('FrontEnd/assets/images/logo-2.png') }}"
                                    alt="logo"></a>

                            <h3 class="title">Create an Account!</h3>
                        </div>
                        <div class="login-input">
                            <form action="#" method="POST">
                                @csrf
                                <div class="input-box mt-10">
                                    <input type="text" placeholder="Refered By">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="password" placeholder="Password">

                                </div>
                                <div class="input-btn mt-10">
                                    <button class="main-btn" type="submit">Register <i
                                            class="fal fa-arrow-right"></i></button>
                                    <span>Have an account? <a href="{{ url('registration') }}">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ERROR PART ENDS ======-->


    <!--====== jquery js ======-->
    <script src="{{ asset('FrontEnd/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('FrontEnd/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('FrontEnd/assets/js/slick.min.js') }}"></script>

    <!--====== Swiper js ======-->
    <script src="{{ asset('FrontEnd/assets/js/swiper.min.js') }}"></script>

    <!--====== nice select js ======-->
    <script src="{{ asset('FrontEnd/assets/js/jquery.nice-select.min.js') }}"></script>

    <!--====== circle progress js ======-->
    <script src="{{ asset('FrontEnd/assets/js/circle-progress.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('FrontEnd/assets/js/jquery.syotimer.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('FrontEnd/assets/js/main.js') }}"></script>

</body>

</html>
