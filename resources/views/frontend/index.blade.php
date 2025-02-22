<!doctype html>
<html lang="en">
@php
    $pack = DB::table('packages_setting')->get();
    $bonous = DB::table('commisions_setting')->first();

@endphp
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>PIKAFUTURE -- Grab Your Profit</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('FrontEnd/assets/images/favicon.ico')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/bootstrap.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/all.css')}}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/nice-select.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/slick.css')}}">

    <!--====== Swiper css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/swiper.min.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/style.css')}}">


</head>

<body>
    <!--====== HEADER PART START ======-->
    <header class="header-area">
        <div class="header-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('FrontEnd/assets/images/logo.png')}}" alt=""><strong style="color: white;
                                    font-family: cursive;
                                    font-size: 26px;">PIKAFUTURE</strong></a>
                                <!-- logo -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Benefits">Benefits</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Packages">Packages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Roadmap">Roadmap</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Faqs">Faqs</a>
                                        </li>
                                        <li style="
                                        padding-top: 25px;
                                        padding-right: 8px;
                                    ">
                                            <a class="main-btn" href="{{url('login-panel')}}">login</a>
                                        </li>
                                        <li style="
                                        padding-top: 25px;
                                        padding-right: 8px;
                                    ">
                                            <a class="main-btn-2 main-btn" href="{{url('registration')}}">signup</a>
                                        </li>

                                    </ul>
                                </div> <!-- navbar collapse -->
                                {{-- <div class="navbar-btn d-none d-sm-flex">
                                    <ul>
                                        <li><a class="main-btn" href="{{url('login-panel')}}">login</a></li>
                                        <li><a class="main-btn-2 main-btn" href="{{url('registration')}}">signup</a></li>
                                    </ul>
                                </div> --}}
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== BANNER PART START ======-->

    <section class="banner-area bg_cover" style="background-image: url({{asset('FrontEnd/assets/images/banner-bg.jpg')}}); height:850px">
        <div class="container" id="particles-js">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="banner-content text-center">
                        <h1 class="title">Introducing The Global Cryptofunding Platform</h1>
                        <ul>
                            <li><a class="main-btn main-btn-2" href="#about">Know More</a></li>
                            <li><a class="main-btn" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="social">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-medium"></i></a></li>
                <li><a href="#"><i class="fal fa-paper-plane"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-github"></i></a></li>

            </ul>
        </div>
    </section>

    <!--====== BANNER PART ENDS ======-->

    <!--====== CRYPTEN FEATURES PART START ======-->

    <section class="crypten-features-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="crypten-features-item text-center mt-30">
                        <img src="{{asset('FrontEnd/assets/images/icon/features-icon-1.png')}}" alt="icon">
                        <h3 class="title">Powerful Technology</h3>
                        <p>A versatile framework combining Ethereum-based technology with powerful tools and
                            applications.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="crypten-features-item text-center mt-30">
                        <img src="{{asset('FrontEnd/assets/images/icon/features-icon-2.png')}}" alt="icon">
                        <h3 class="title">Provably Fair</h3>
                        <p>A versatile framework combining Ethereum-based technology with powerful tools and
                            applications.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="crypten-features-item text-center mt-30 item-3">
                        <img src="{{asset('FrontEnd/assets/images/icon/features-icon-3.png')}}" alt="icon">
                        <h3 class="title">Trusted Globally</h3>
                        <p>A versatile framework combining Ethereum-based technology with powerful tools and
                            applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== CRYPTEN FEATURES PART ENDS ======-->

    <!--====== CRYPTEN TRADE PART START ======-->

    <section class="crypten-trade-area pt-190" id="Benefits">
        <div class="item-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="crypten-trade-thumb">
                            <img src="{{asset('FrontEnd/assets/images/benefits-1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crypten-trade-content">
                            <span>what is PIKAFUTURE</span>
                            <h3 class="title">A Secure Platform for ICO and Cryptocurrency Trade</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, ipsa.
                                 Atque illum vel quasi eos ut officia ad cum praesentium, voluptatem consequuntur eveniet nemo, veniam, aut quia perferendis officiis. Commodi!</p>
                            <div class="trade-item mt-30">
                                <img src="{{asset('FrontEnd/assets/images/icon/trade-icon-1.png')}}" alt="">
                                <h5 class="title">Our Mission</h5>
                                <p>We’ve always been on the vestibulum fermentum veli non placerat aecenase in hen
                                    quisque quis.</p>
                            </div>
                            <div class="trade-item mt-30">
                                <img src="{{asset('FrontEnd/assets/images/icon/trade-icon-2.png')}}" alt="">
                                <h5 class="title">Our Vision</h5>
                                <p>We’ve always been on the vestibulum fermentum veli non placerat aecenase in hen
                                    quisque quis.</p>
                            </div>
                            <div class="trade-item mt-30">
                                <img src="{{asset('FrontEnd/assets/images/icon/trade-icon-3.png')}}" alt="">
                                <h5 class="title">The Future</h5>
                                <p>We’ve always been on the vestibulum fermentum veli non placerat aecenase in hen
                                    quisque quis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{asset('FrontEnd/assets/images/shape/color-bg.png')}}" alt="">
            </div>
        </div>
        <div class="item-1 item-2 mt-180" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="crypten-trade-content">
                            <span>about us</span>
                            <h3 class="title">Based Around A Global Community Network</h3>
                            <p>Our community is consisted of people from around the globe and that’s in hendrerit justo
                                quisque quis rhoncus exeget semper semlamat lobortis velit estibulum ante ipsum primis
                                in faucibus orcie luctus et ultrices posuere cubilia curae ed dignissim leo lorema
                                imenum mauris vestibulum et maecenas vitae urna aced.</p>
                            <div class="trade-about-follow mt-30">
                                <h4 class="title">Follow us</h4>
                                <p>You don’t want to miss any updates vestibulum fermentum velit non placerat aecenase
                                    in hendrerit justo quisque quis:</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-medium"></i></a></li>
                                    <li><a href="#"><i class="fas fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fab fa-btc"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="crypten-trade-thumb">
                            <img src="{{asset('FrontEnd/assets/images/benefits-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{asset('FrontEnd/assets/images/shape/color-bg-2.png')}}" alt="">
            </div>
        </div>
        <div class="item-1 mt-165">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="crypten-trade-thumb">
                            <img src="{{asset('FrontEnd/assets/images/benefits-3.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crypten-trade-content">
                            <span>contracts</span>
                            <h3 class="title">Generating Secure and Adaptive Smart Contracts</h3>
                            <p>The contracts on our platform not only ellentesque vestibulum rmentum velit non placerat
                                aecenase in hendrerit justo quisque quis rhoncus huge exeget semper semlamat lobortis
                                velit estibulum ante.</p>
                            <div class="trade-contracts mt-30">
                                <i class="far fa-check-double"></i>
                                <p>Always 100% secureKrcie luctus et ultrices posuere cubilia curae ed dignissim leo
                                    lorema imenum mauris vestibulum exeget semper mat belit estibulum ante ipsum primis.
                                </p>
                            </div>
                            <div class="trade-contracts mt-30">
                                <i class="far fa-check-double"></i>
                                <p>No comprosise on authenticity krcie luctus et ultrices posuere cubilia curae ed
                                    dignissim leo lorema imenum.</p>
                            </div>
                            <div class="trade-contracts mt-30">
                                <i class="far fa-check-double"></i>
                                <p>You’ll find our contacracts to be uctus et ultrices posuere cubilia curae ed
                                    dignissim leo lorema imenum mauris vestibulum exeget semper mat kelit estibulum ante
                                    ipsum primis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{asset('FrontEnd/assets/images/shape/color-bg.png')}}" alt="">
            </div>
        </div>
        <div class="item-1 item-4 mt-185">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="crypten-trade-content">
                            <span>automation</span>
                            <h3 class="title">Scalable, Fast and Ultra Secure Transactions</h3>
                            <p>The contracts on our platform not only ellentesque vestibulum rmentum velit non placerat
                                aecenase in hendrerit justo quisque quis rhoncus huge exeget semper semlamat lobortis
                                velit estibulum ante.</p>
                            <div class="trade-contracts mt-30">
                                <i class="far fa-check-double"></i>
                                <p>Always 100% secureKrcie luctus et ultrices posuere cubilia curae ed dignissim leo
                                    lorema imenum mauris vestibulum exeget semper mat belit estibulum ante ipsum primis.
                                </p>
                            </div>
                            <div class="trade-contracts mt-30">
                                <i class="far fa-check-double"></i>
                                <p>No comprosise on authenticity krcie luctus et ultrices posuere cubilia curae ed
                                    dignissim leo lorema imenum.</p>
                            </div>
                            <div class="trade-contracts mt-30">
                                <i class="far fa-check-double"></i>
                                <p>You’ll find our contacracts to be uctus et ultrices posuere cubilia curae ed
                                    dignissim leo lorema imenum mauris vestibulum exeget semper mat kelit estibulum ante
                                    ipsum primis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="crypten-trade-thumb">
                            <img src="{{asset('FrontEnd/assets/images/benefits-4.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{asset('FrontEnd/assets/images/shape/color-bg-2.png')}}" alt="">
            </div>
        </div>
        <div class="item-1 mt-185 mb-195">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="crypten-trade-thumb">
                            <img src="{{asset('FrontEnd/assets/images/benefits-5.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crypten-trade-content">
                            <span>Tokenization</span>
                            <h3 class="title">Powerful and Absolutely Secure Tokenization</h3>
                            <p>Crypten is one of the highly rated secure platfrom for ICO and any type of in hendrerit
                                justo quisque quis rhons exeget semper semlamat lobortis velit estibulum ante ipsum
                                primis in faucibus.</p>
                            <div class="trade-item mt-30">
                                <img src="{{asset('FrontEnd/assets/images/icon/trade-icon-4.png')}}" alt="">
                                <h5 class="title">100% Secure</h5>
                                <p>Yellentesque vestibulum fermentum velit non placerat aecenase in hendrerit justo
                                    quisque quis.</p>
                            </div>
                            <div class="trade-item mt-30">
                                <img src="{{asset('FrontEnd/assets/images/icon/trade-icon-3.png')}}" alt="">
                                <h5 class="title">Automated</h5>
                                <p>Bellentesque vestibulum fermentum velit non placerat aecenase in hendrerit justo
                                    quisque quis.</p>
                            </div>
                            <div class="trade-item mt-30">
                                <img src="{{asset('FrontEnd/assets/images/icon/trade-icon-5.png')}}" alt="">
                                <h5 class="title">encryption</h5>
                                <p>Tellentesque vestibulum fermentum velit non placerat aecenase in hendrerit justo
                                    quisque quis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{asset('FrontEnd/assets/images/shape/color-bg.png')}}" alt="">
            </div>
        </div>
    </section>

    <!--====== CRYPTEN TRADE PART ENDS ======-->

    <!--====== BENEFITS PART START ======-->

    <section class="banefits-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span>benefits </span>
                        <h3 class="title">Get to Know Our Ecosystem’s Key Features & Benefits</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="banefits-item mt-30">
                        <img src="{{asset('FrontEnd/assets/images/icon/banefits-1.png')}}" alt="icon">
                        <h4 class="title">Simplicity</h4>
                        <p>User-friendly app and account creation, intuitive also for casual bettors.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="banefits-item mt-30">
                        <img src="{{asset('FrontEnd/assets/images/icon/banefits-2.png')}}" alt="icon">
                        <h4 class="title">Unique Features</h4>
                        <p>From betting on local teams to joining our exclusive High Roller Club.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="banefits-item mt-30">
                        <img src="{{asset('FrontEnd/assets/images/icon/banefits-3.png')}}" alt="icon">
                        <h4 class="title">Social Engagement</h4>
                        <p>Community boost via player competition, chat, achievement and badges.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="banefits-item mt-30">
                        <img src="{{asset('FrontEnd/assets/images/icon/banefits-4.png')}}" alt="icon">
                        <h4 class="title">Safe & Transparent </h4>
                        <p>Smart Contracts shield funds and bets from manipulation.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banefits-btn text-center pt-100">
                        <ul>
                            <li><a class="main-btn main-btn-2" href="#">Whitepaper</a></li>
                            <li><a class="main-btn" href="#">buy tokens</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banefits-color">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-3.png')}}" alt="">
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </section>

    <!--====== BENEFITS PART ENDS ======-->

    <!--====== TOKEN SALE PART START ======-->

    <section class="token-sale-area" id="Packages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span>Packages</span>
                        <h3 class="title">Packages Rounds</h3>
                    </div>
                </div>
            </div>
            <div class="row token-sale-active">
                @forelse ($pack as $item)
                <div class="col-lg-4">
                    <div class="token-sale-item mt-30 text-center">
                        <div class="circle">
                            <h3 class="cicleText">300%</h3>
                        </div>
                        <span>{{$item->package_name}}</span>
                        <p>{{$item->package_price}}$</p>

                    </div>
                </div>
                @empty
                    <h6>No package found</h6>
                @endforelse


            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="token-sale-btn d-flex justify-content-center mt-50">
                        <ul>
                            <li><a class="main-btn main-btn-2" href="#">Whitepaper</a></li>
                            <li><a class="main-btn main-btn-3" href="#">tech paper</a></li>
                            <li><a class="main-btn" href="#">buy tokens</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </section>

    <!--====== TOKEN SALE PART ENDS ======-->

    <!--====== STAKEHOLDERS PART START ======-->

    <section class="stakeholders-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span>Earnings</span>
                        <h3 class="title">Profit Distribution</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="stakeholders-btn mt-30">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Total Profit</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Referal Bonous Level-1</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">Referal Bonous Level-2</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Referal Bonous Level-3</a>
                            <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab"
                                aria-controls="v-pills-5" aria-selected="false">Limitations</a>
                        </div>
                    </div>
                    <div class="stakeholders-price">
                        <ul>
                            <li>
                                <span>Price Now</span>
                                <p>1 BC = 2 $</p>
                            </li>
                            <li>
                                <span>Total Supply Limit</span>
                                <p>36 000 000 BC</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="stakeholders-thumb mt-55">
                                <div class="circle">
                                    <p class="squareText p-3 text-center">300% with total income including referal bonous & trading bonous</p>
                                    <p class="squareText p-3 text-center">Only, After 2 active account below your referal link you will get 300% bonous otherwise you will get 200%</p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="stakeholders-thumb mt-55">
                                <div class="circle">
                                    <h3 class="squareText mr-2">{{$bonous->levelOnePer}}% (From level One)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="stakeholders-thumb mt-55">
                                <div class="circle">
                                    <h3 class="squareText mr-2">{{$bonous->levelTwoPer}}% (From Level Two)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="stakeholders-thumb mt-55">
                                <div class="circle">
                                    <h3 class="squareText mr-2">{{$bonous->levelThreePer}}% (From Third level)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                            <div class="stakeholders-thumb mt-55">
                                <div class="circle">
                                    <p class="squareText p-3 text-center">Only, After 2 active account below your referal link you will get 300% bonous otherwise you will get 200%</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </section>

    <!--====== STAKEHOLDERS PART ENDS ======-->

    <!--====== DOCUMENTS PART START ======-->

    <section class="documents-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>documents </span>
                        <h3 class="title">Download & Read Our Crypto Documents</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="documents-item mt-30">
                        <div class="documents-top">
                            <h3 class="title">White <br> Paper</h3>
                            <img src="{{asset('FrontEnd/assets/images/icon/download.png')}}" alt="">
                        </div>
                        <div class="documents-thumb text-center">
                            <img src="{{asset('FrontEnd/assets/images/documents-1.png')}}" alt="">
                            <a class="main-btn" href="#">download</a>
                            <div class="documents-hover-image">
                                <img src="{{asset('FrontEnd/assets/images/documents-5.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="documents-item mt-30">
                        <div class="documents-top">
                            <h3 class="title">one <br> Pager</h3>
                            <img src="{{asset('FrontEnd/assets/images/icon/download.png')}}" alt="">
                        </div>
                        <div class="documents-thumb text-center">
                            <img src="{{asset('FrontEnd/assets/images/documents-2.png')}}" alt="">
                            <a class="main-btn" href="#">download</a>
                            <div class="documents-hover-image">
                                <img src="{{asset('FrontEnd/assets/images/documents-6.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="documents-item mt-30">
                        <div class="documents-top">
                            <h3 class="title">Tech <br> Paper</h3>
                            <img src="{{asset('FrontEnd/assets/images/icon/download.png')}}" alt="">
                        </div>
                        <div class="documents-thumb text-center">
                            <img src="{{asset('FrontEnd/assets/images/documents-3.png')}}" alt="">
                            <a class="main-btn" href="#">download</a>
                            <div class="documents-hover-image">
                                <img src="{{asset('FrontEnd/assets/images/documents-7.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="documents-item mt-30">
                        <div class="documents-top">
                            <h3 class="title">privacy <br> policy</h3>
                            <img src="{{asset('FrontEnd/assets/images/icon/download.png')}}" alt="">
                        </div>
                        <div class="documents-thumb text-center">
                            <img src="{{asset('FrontEnd/assets/images/documents-4.png')}}" alt="">
                            <a class="main-btn" href="#">download</a>
                            <div class="documents-hover-image">
                                <img src="{{asset('FrontEnd/assets/images/documents-8.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </section>

    <!--====== DOCUMENTS PART ENDS ======-->

    <!--====== FUTURE ROADMAP PART START ======-->

    <section class="future-roadmap" id="Roadmap">
        <div class="section-title section-title-2 text-center">
            <span>Future forecast</span>
            <h3 class="title">Our Future Roadmap</h3>
        </div>
        <div class="container">
            <div class="swiper-custom-pagination"></div>
            <div class="swiper-container roadmap-main">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide roadmap-main-slide">
                        <div class="swiper-container roadmap-sec">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide roadmap-sec-slide active">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q1</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q1</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q2</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q2</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q3</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q3</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q4</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q4</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide roadmap-main-slide">
                        <div class="swiper-container roadmap-sec">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q1</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q1</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q2</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q2</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q3</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q3</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q4</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q4</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide roadmap-main-slide">
                        <div class="swiper-container roadmap-sec">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q1</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q1</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q2</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q2</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q3</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q3</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide roadmap-sec-slide">
                                    <div class="content">
                                        <div class="content-wrapper">
                                            <h6>Q4</h6>
                                            <ul>
                                                <li>Idea Realization and Market Research</li>
                                                <li>$480,000 First Round Investment</li>
                                                <li>Architecture Design and Whitepaper</li>
                                                <li>Starting MVP Development</li>
                                                <li>Initial Token Offering</li>
                                            </ul>
                                            <div class="progress-bar-wrapper">
                                                <div class="progress-bar-wrapper-text">
                                                    <span>PROGRESS</span>
                                                    <span>42%</span>
                                                </div>
                                                <div class="progress-bar-wrapper-actual"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-div">
                                        <h6>Q4</h6>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="baseline"></div>
        <div class="roadmap-main-arrow roadmap-main-prev">
            <i class="fas fa-angle-left"></i>
        </div>
        <div class="roadmap-main-arrow roadmap-main-next">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
        <div class="roadmap-map">
            <img src="{{asset('FrontEnd/assets/images/roadmap-map.png')}}" alt="">
        </div>
    </section>

    <!--====== FUTURE ROADMAP PART END ======-->

    <!--====== TEAM PART START ======-->
{{--
    <section class="team-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span>Our Senior Management</span>
                        <h3 class="title">Meet Our Executive Team</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-1.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Maria Dokshina</h4>
                            <span>Co-founder, ceo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-2.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Alexander Nuikin</h4>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-3.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Nadia Cherkasova</h4>
                            <span>Head of Community</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-4.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Bdtayev Valery</h4>
                            <span>PR Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-5.jpg')}}" alt="team">
                        </div>
                        <div class="team-content ">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Nikita Shilenko</h4>
                            <span>PR Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-6.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Oleg Gaidukov</h4>
                            <span>Technical Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-7.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Bogdan Dupak</h4>
                            <span>Front-end</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-8.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Polina Sukhanova</h4>
                            <span>Community Hero</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mt-75 pb-30">
                        <h3 class="title">Meet Our Advisors</h3>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-9.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Maria Dokshina</h4>
                            <span>Co-founder, ceo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-10.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Alexander Nuikin</h4>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-11.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Nadia Cherkasova</h4>
                            <span>Head of Community</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-12.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Bdtayev Valery</h4>
                            <span>PR Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-13.jpg')}}" alt="team">
                        </div>
                        <div class="team-content ">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Nikita Shilenko</h4>
                            <span>PR Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-14.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Oleg Gaidukov</h4>
                            <span>Technical Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-15.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Bogdan Dupak</h4>
                            <span>Front-end</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{asset('FrontEnd/assets/images/team-16.jpg')}}" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Polina Sukhanova</h4>
                            <span>Community Hero</span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== FAQ PART START ======-->

    <section class="faq-area" id="Faqs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span>Knowledgebase</span>
                        <h3 class="title">Frequently Asked Questions</h3>
                        <p>Below are some common frequently asked questionshendrerit justo quisque quis rhoncus exeget
                            semper semlamat lobortis velit estibulum ante.</p>
                        <ul class="nav nav-pills" id="pills-tab-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-a-tab" data-toggle="pill" href="#pills-a"
                                    role="tab" aria-controls="pills-a" aria-selected="true">general</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-b-tab" data-toggle="pill" href="#pills-b" role="tab"
                                    aria-controls="pills-b" aria-selected="false">Pre ICO & ICO</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-c-tab" data-toggle="pill" href="#pills-c" role="tab"
                                    aria-controls="pills-c" aria-selected="false">Tokens</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent-2">
                        <div class="tab-pane fade show active" id="pills-a" role="tabpanel"
                            aria-labelledby="pills-a-tab">
                            <div class="faq-accordion">
                                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                                    <div class="accrodion active  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="0ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is CRYPTEN?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion   animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="300ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is CRYPTO Token?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="600ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is the price of the CRYPTO Token?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="600ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Why do you accept only Ether (ETH)?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-c-tab">
                            <div class="faq-accordion">
                                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                                    <div class="accrodion active  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="0ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is CRYPTEN?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion   animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="300ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is CRYPTO Token?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="600ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is the price of the CRYPTO Token?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="600ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Why do you accept only Ether (ETH)?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-b" role="tabpanel" aria-labelledby="pills-b-tab">
                            <div class="faq-accordion">
                                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                                    <div class="accrodion active  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="0ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is CRYPTEN?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion   animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="300ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is CRYPTO Token?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="600ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>What is the price of the CRYPTO Token?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  animated wow fadeInRight" data-wow-duration="1500ms"
                                        data-wow-delay="600ms">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Why do you accept only Ether (ETH)?</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>CRYPTO is a utility token based on the ERC20 standard. All
                                                        transactions on the CRYPTEN platform will be carried out in
                                                        CRYPTO. TheCRYPTO token will be freely tradable on major
                                                        exchanges and is fully compatible with Ethereum wallets.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </section>

    <!--====== FAQ PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section class="blog-area">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span>Our blog</span>
                        <h3 class="title">Fresh Crypten Reads</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="blog-item mt-30">
                        <div class="blog-thumb">
                            <img src="{{asset('FrontEnd/assets/images/blog-1.jpg')}}" alt="">
                        </div>
                        <div class="blog-content text-center">
                            <span><span>BLOCKCHAIN</span> June 19, 2019</span>
                            <a href="#">Decentralized vs. Centralized Exchanges</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="blog-item mt-30">
                        <div class="blog-thumb">
                            <img src="{{asset('FrontEnd/assets/images/blog-2.jpg')}}" alt="">
                        </div>
                        <div class="blog-content text-center">
                            <span><span>Cryptocurrency</span> June 19, 2019</span>
                            <a href="#">Cryptocurrencies and The Promising Future</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="blog-item mt-30">
                        <div class="blog-thumb">
                            <img src="{{asset('FrontEnd/assets/images/blog-3.jpg')}}" alt="">
                        </div>
                        <div class="blog-content text-center">
                            <span><span>BLOCKCHAIN</span> June 19, 2019</span>
                            <a href="#">Crypten Blockchain Initiative for 2019</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-btn text-center">
                        <a class="main-btn main-btn-2" href="#">go to our blog <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== BRAND PART START ======-->

    {{-- <section class="brand-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>Our trusted Partners</span>
                        <h3 class="title">Meet Our Partners and Platform Backers</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="brand-item mt-30">
                        <a href="#"><img src="{{asset('FrontEnd/assets/images/brand.png')}}" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="brand-item mt-30">
                        <a href="#"><img src="{{asset('FrontEnd/assets/images/brand.png')}}" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="brand-item mt-30">
                        <a href="#"><img src="{{asset('FrontEnd/assets/images/brand.png')}}" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="brand-item mt-30">
                        <a href="#"><img src="{{asset('FrontEnd/assets/images/brand.png')}}" alt="brand"></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-70">
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="brand-item mt-30">
                        <a href="#"><img src="{{asset('FrontEnd/assets/images/brand.png')}}" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="brand-item mt-30">
                        <a href="#"><img src="{{asset('FrontEnd/assets/images/brand.png')}}" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="brand-item mt-30">
                        <a href="#"><img src="{{asset('FrontEnd/assets/images/brand.png')}}" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="brand-item mt-30">
                        <a href="#"><img src="{{asset('FrontEnd/assets/images/brand.png')}}" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </section> --}}

    <!--====== BRAND PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section class="contact-area" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>get in touch</span>
                        <h3 class="title">Contact Crypten</h3>
                        <p>Have any question? Write to us and we’ll get back to you shortly.</p>
                        <ul>
                            <li><a href="tel:+61383766284"><img src="{{asset('FrontEnd/assets/images/icon/icon-7.png')}}" alt="icon"> +61 3
                                    8376 6284</a></li>
                            <li><a href="mailto:info@crypten.com"><img src="{{asset('FrontEnd/assets/images/icon/icon-8.png')}}" alt="icon">
                                    info@crypten.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="col-xl-12 col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <form action="{{url('contact-message')}}" method="POST">
                        @csrf
                        <div class="contact-box">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-box mt-10">
                                        <input type="text" placeholder="Customer Id (Id Have)" name="customer_id">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box mt-10">
                                        <input type="text" placeholder="Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box mt-10">
                                        <input type="text" placeholder="Email Address" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box mt-10 text-center">
                                        <textarea name="message" id="#" cols="30" rows="10" placeholder="Message"></textarea>
                                        <button type="submit" class="main-btn">send message <i
                                                class="fal fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">Menu</h4>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">PAPERS</h4>
                        <ul>
                            <li><a href="#">White Paper</a></li>
                            <li><a href="#">Technical Paper</a></li>
                            <li><a href="#">One Pager</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">legal</h4>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">Newsletter</h4>
                        <form action="#">
                            <div class="input-box">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fal fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright d-flex justify-content-between align-items-center">
                        <p class="order-2 order-sm-1">© 2021 PIKAFUTURE</p>
                        <ul class="order-1 order-sm-2">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                            <li><a href="#"><i class="fal fa-paper-plane"></i></a></li>
                            <li><a href="#"><i class="fab fa-btc"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{asset('FrontEnd/assets/images/shape/color-bg-4.png')}}" alt="">
        </div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== scroll_up PART START ======-->

    <a id="scroll_up"><i class="far fa-angle-up"></i></a>

    <!--====== scroll_up PART ENDS ======-->






    <!--====== jquery js ======-->
    <script src="{{asset('FrontEnd/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/particles.min.js')}}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{asset('FrontEnd/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/popper.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('FrontEnd/assets/js/slick.min.js')}}"></script>

    <!--====== Swiper js ======-->
    <script src="{{asset('FrontEnd/assets/js/swiper.min.js')}}"></script>

    <!--====== nice select js ======-->
    <script src="{{asset('FrontEnd/assets/js/jquery.nice-select.min.js')}}"></script>

    <!--====== circle progress js ======-->
    <script src="{{asset('FrontEnd/assets/js/circle-progress.min.js')}}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{asset('FrontEnd/assets/js/jquery.syotimer.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('FrontEnd/assets/js/main.js')}}"></script>

</body>

</html>
