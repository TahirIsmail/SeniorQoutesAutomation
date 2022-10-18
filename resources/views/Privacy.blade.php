<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Senior Quote</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/mainlogo.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">

    <style>
        .butn2 {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        .text-center {
            text-align: center;
        }

        .font-size {
            font-size: 30px !important;
            line-height: 35px !important;
            font-weight: 400 !important;

        }

        .title {
            font-size: 12px;
            text-transform: uppercase;
            line-height: 34px;
            font-weight: 400;
            margin-bottom: 60px;
            margin-top: 0;
            text-align: center;
            position: relative;
            letter-spacing: 1px;
        }

        .title .title-head {
            font-size: 36px;
            text-transform: capitalize;
            display: block;
            font-weight: 700;
            letter-spacing: 0;
        }

        .ts-service-icon-wrapper {
            text-align: center;
        }

        /*.title:after {*/
        /*    content: "";*/
        /*    position: absolute;*/
        /*    display: inline-block;*/
        /*    bottom: -20px;*/
        /*    width: 100px;*/
        /*    height: 3px;*/
        /*    background: #1e366c;*/
        /*    left: 50%;*/
        /*    margin-left: -50px;*/
        /*}*/

        .ts-service-wrapper:hover .ts-service-icon {
            border: 5px solid rgba(0, 0, 0, 0.3);
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .ts-service-icon-wrapper .ts-service-icon {
            font-size: 32px;
            background: linear-gradient(75deg, rgb(22 37 103 / 84%) 10%, rgb(230 2 100 / 37%));
            color: #fff;
            width: 90px;
            height: 90px;
            line-height: 97px;
            display: inline-block;
            border-radius: 100%;
            margin: 25px 0 18px;
        }

        .ts-service-wrapper:hover .ts-service-icon {
            border: 5px solid rgba(0, 0, 0, 0.3);
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .ts-service-wrapper .ts-service-icon {
            -webkit-transition: 400ms;
            -moz-transition: 400ms;
            -o-transition: 400ms;
            transition: 400ms;
            -webkit-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
        }

        .ts-service-wrapper .ts-service-info h3 {
            font-size: 16px;
            letter-spacing: -1px;
            font-weight: bold;
            color: #3d4049;
        }

        .ts-service-info {
            text-align: center;
        }

        /* .form-border {
            border-color: #1e366c;
        } */
        #jornaya_bg {
            background: #eee;
        }

        #final_insurance_form {
            background: #eee;
            border-radius: 0px 0px 10px 10px !important;
        }

        .value_text {
            font-size: small;
        }

        .letter-space {
            letter-spacing: 2px;
            line-height: 50px;
            font-size: 35px;
        }

        .fonta-size {
            font-size: 35px;
        }

        .link-color {
            color: #060606;
        }

        .txt-weight {
            font-weight: 600;
        }

        .w3l-banner {
            min-height: 80vh;
            background-image: url("{{asset('assets/images/privacy_bg.jpg')}}");
           
        }
    </style>
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="">
                        <img src="{{ asset('assets/images/mainlogo.png') }}" width="60">
                        The Senior Quote
                    </a>
                </h1>
                <!-- if logo is image enable this
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <!-- <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about_us">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact_us">Contact Us</a>
                        </li> -->
                        <!-- search button -->
                        <!-- <div class="search-right">
                            <a href="#search" class="btn" title="search"><span class="fa fa-search" aria-hidden="true"></span></a> -->
                            <!-- search popup -->
                            <!-- <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Now</h4>
                                    <form action="#error" method="GET" class="search-box">
                                        <div class="input-search"> <span class="fa fa-search mr-2" aria-hidden="true"></span><input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="" class="search-popup">
                                        </div>
                                        <button type="submit" class="btn btn-style-white search-btn">Search</button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div> -->
                            <!-- //search popup -->
                        <!-- </div> -->
                        <!-- //search button -->
                    <!-- </ul>
                </div> -->
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <section class="w3l-banner">
        <div class="container-fluid">
            <div class="text-center">
                <div>
                    <h4 class="text-white letter-space"><b>ARBITRATION PRIVACY POILCY</b></h4>
                </div>
                <div>
                    <span class="text-white text-muted txt-weight"><a href="{{route('home')}}" class="link-color">Home</a> / Arbitration Privacy Poilcy</span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid" id="Privacy_poilcy">
            <div class="p-5">
                <div class="text-center p-3">
                    <h2 class="fonta-size"><b>Arbitration Agreement</b></h2>
                    <hr style="width:10%;border-width :3px;color:#060606;background-color:#060606">
                </div>
                <div class="p-3">
                    <p class="description p-1">Any dispute or claim relating in any way to your use of this website, including any related calls texts or other communications, will be resolved by binding arbitration, rather than in court, except that you may assert claims in small claims court if your claims qualify. This includes claims against our clients, vendors, and Marketing Partners, which are third party beneficiaries of this arbitration agreement. The Federal Arbitration Act and federal arbitration law apply to this agreement.</p>

                    <p class="description p-1">There is no judge or jury in arbitration, and court review of an arbitration award is limited. However, an arbitrator can award on an individual basis the same damages and relief as a court (including injunctive and declaratory relief or statutory damages), and must follow the terms of these terms as a court would. The arbitration may be conducted by the American Arbitration Association (AAA) under its rules, including the AAA's Supplementary Procedures for Consumer-Related Disputes. The AAA's rules are available at www.adr.org or by calling 1-800-778-7879. You may choose to have the arbitration conducted by telephone, based on written submissions, or in person in the county where you live or at another mutually agreed location.</p>

                    <p class="description p-1">We each agree that any dispute resolution proceedings will be conducted only on an individual basis and not in a class, consolidated or representative action. If for any reason a claim proceeds in court rather than in arbitration we each waive any right to a jury trial. We also both agree that you or we may bring suit in court to enjoin infringement or other misuse of intellectual property rights.</p>
                </div>
            </div>
        </div>
    </section>











    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-3 col-6 footer-list-29">
                                <ul>
                                    <h6 class="footer-title-29">THE SENIOR QUOTE</h6>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about_us">About</a></li>
                                    <li><a href="#services">Our Services</a></li>
                                    <li><a href="#contact_us">Contact_us</a></li>
                                    <li><a href="#jornaya_form">Get a Quote</a></li>
                                </ul>
                            </div>
                            <!--<div class="col-md-3 col-6 footer-list-29">-->
                            <!--    <ul>-->
                            <!--        <h6 class="footer-title-29">Quick Links</h6>-->
                            <!--        <li><a href="#call-center">Management</a></li>-->
                            <!--        <li><a href="services.html">Department Services</a></li>-->
                            <!--        <li><a href="#call-center">Make Appointment</a></li>-->
                            <!--        <li><a href="about.html">Our Business Growth</a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            <!--<div class="col-md-3 col-6 footer-list-29 mt-md-0 mt-4">-->
                            <!--    <ul>-->
                            <!--        <h6 class="footer-title-29">Support</h6>-->
                            <!--        <li><a href="#call-center">Live Chart</a></li>-->
                            <!--        <li><a href="#call-center">Faq's</a></li>-->
                            <!--        <li><a href="#call-center"> Support</a></li>-->
                            <!--        <li><a href="#call-center">Terms of Service</a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            <!--<div class="col-md-3 col-6 footer-list-29 mt-md-0 mt-4">-->
                            <!--    <h6 class="footer-title-29">More Info</h6>-->
                            <!--    <ul>-->
                            <!--        <li><a href="#privacy">Privacy Policy</a></li>-->
                            <!--        <li><a href="#terms"> Terms of Service</a></li>-->
                            <!--        <li><a href="contact.html">Contact us</a></li>-->
                            <!--        <li><a href="#support"> Support</a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                    </div>

                    <div class="col-lg-3 footer-contact-list mt-lg-0 mt-md-5 mt-4">
                        <h6 class="footer-title-29">Contact Info </h6>
                        <ul>
                            <!--<li class="d-flex align-items-center py-2"><i class="fa fa-map-marker mr-2" aria-hidden="true"></i>10001, 5th Avenue, USA</li>-->
                            <li class="d-flex align-items-center py-2"><i class="fa fa-phone mr-2" aria-hidden="true"></i><a href="tel:+12 23456790">1-800-991-4407</a></li>
                            <li class="d-flex align-items-center py-2"><i class="fa fa-envelope mr-2" aria-hidden="true"></i><a href="mailto:info@therevolutiontechnologies.com">info@theseniorquote.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->
    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">
                    <!--© 2022 The Senior Quote by | All Rights Reserved | Powered by -->
                    Copyright © 2022 The Senior Quote. All Rights Reserved.
                    <!--<a href="https://therevolutiontechnologies.com/" target="_blank">-->
                    <!--    The Revolution Technologies</a>-->
                </p>
                <div class="col-lg-4 text-right">
                    <div class="main-social-footer-29">
                        <a href="https://www.facebook.com/TheRevolutionTechnologies" class="facebook" target="blank"><span class="fa fa-facebook"></span></a>
                        <!--<li class="skype"><a href="callto:babar.nayatel" title="Skype"><i class="icon-skype"></i></a></li>-->
                        <a href="callto:live:uneebmalik_1" class="Skype"><span class="fa fa-skype" target="blank"></span></a>

                        <!--<li class="whatsapp"><a href="whatsapp:+12109489275" title="WhatsApp"><i class="icon-whatsapp"></i></a></li>-->
</body>

</html>