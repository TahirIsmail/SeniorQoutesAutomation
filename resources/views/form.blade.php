<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Senior Quote</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/mainlogo.png') }}">
    <!-- Inputmask -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
        integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">


    <style>
        .butn2 {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        h2 {
            font-size: 26px;
            font-weight: bold;
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
    </style>
</head>

<body>
    @include('sweetalert::alert')
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
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
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
                        </li>
                        <!-- search button -->
                        <div class="search-right">
                            <a href="#search" class="btn" title="search"><span class="fa fa-search"
                                    aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Now</h4>
                                    <form action="#error" method="GET" class="search-box">
                                        <div class="input-search"> <span class="fa fa-search mr-2"
                                                aria-hidden="true"></span><input type="search"
                                                placeholder="Enter Keyword" name="search" required="required"
                                                autofocus="" class="search-popup">
                                        </div>
                                        <button type="submit" class="btn btn-style-white search-btn">Search</button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- //search popup -->
                        </div>
                        <!-- //search button -->
                    </ul>
                </div>
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

    <!-- banner section -->
    <section class="w3l-banner" id="home">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 banner-left">
                    <h3 class="text-white mb-3 title font-size text-left">Receive your no-cost <br>
                        consultation with a licensed insurance agent
                        <span class="type-js"><span class="text-js"> Service! </span></span>
                    </h3>
                    <p class="lead" style="color: #cbc3c3;">Lead generation doesn’t have to be all that painful.<br>
                        We will connect you with high-quality prospects and leads to grow your company
                    </p>
                    <div class="mt-5">
                        <a class="btn btn-style-white" href="#jornaya_form">Get a Quote</a>
                    </div>
                </div>
                <!--<div class="col-12 d-flex justify-content-end p-0 main-social-footer-29">-->
                <!--    <a href="https://www.facebook.com/TheRevolutionTechnologies" class="facebook"><span class="fa fa-facebook"></span></a>-->
                <!--    <a href="https://www.linkedin.com/company/therevolutiontechnologies" class="linkedin"><span class="fa fa-linkedin"></span></a>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- Jornaya Form -->
    <div class="container-fluid" id="jornaya_bg">
        <div class="d-flex justify-content-center text-center pt-5">
            <h2 class="title">
                A Dedicated Firm
                <span class="title-head">You Can Trust Us</span>

            </h2>
        </div>
    </div>
    <div class="container">
        <!-- <div class="d-flex justify-content-center text-center mt-5">
            <h2 class="title">
                A Dedicated Firm
                <span class="title-head">You Can Trust Us</span>

            </h2>
        </div> -->
        <div class="d-block d-xl-flex">

            <div class="p-sm-3 mt-3">
                <div class="text-center p-4">
                    <h1><b>WHY US?</b></h1>
                </div>
                <div class="h-100 p-xl-4 p-lg-3 p-2">
                    <div class="d-flex justify-content-center">
                        <div class="row py-4">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="ts-service-wrapper">
                                    <!-- <div class="ts-service-icon-wrapper">
                                    <span class="ts-service-icon"><i class="fa fa-history"></i></span>
                                </div> -->
                                    <div class="ts-service-info mb-4">
                                        <h3>Understanding Medicare Quotes</h3>
                                        <p class="value_text">Medicare quotes can help you understand the coverage,
                                            benefits, and savings
                                            available
                                            to you. Quotes are a decision tool for you, not an obligation to enroll. If
                                            you’re
                                            not ready for Medicare quotes and have questions about how Medicare works,
                                            Part
                                            A,
                                            or Part B, check out our other Medicare Basics articles!</p>
                                    </div>
                                </div>
                            </div><!-- Col 1 end -->

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="ts-service-wrapper">
                                    <!-- <div class="ts-service-icon-wrapper">
                                    <span class="ts-service-icon"><i class="fa fa-star"></i></span>
                                </div> -->
                                    <div class="ts-service-info">
                                        <h3>Why Consider a Medicare Advantage Plan</h3>
                                        <p class="value_text">What makes a Medicare Advantage Plan different from
                                            Medicare Part A or B? How
                                            could a
                                            plan like this benefit you? These questions and more are answered in our
                                            resources
                                            about these popular Medicare plans!</p>
                                    </div>
                                </div>
                            </div><!-- Col 2 end -->
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row py-3">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="ts-service-wrapper">
                                    <!-- <div class="ts-service-icon-wrapper">
                                    <span class="ts-service-icon"><i class="fa fa-hospital-o"></i></span>
                                </div> -->
                                    <div class="ts-service-info mb-4">
                                        <h3>Dental Coverage with Medicare</h3>
                                        <p class="value_text">Most dental services are not covered by Original Medicare
                                            (Parts A and B), with
                                            exceptions only for dental concerns that affect larger health problems. For
                                            example,
                                            your routine cleaning or filling is 100% out of pocket, but surgery for a
                                            jaw
                                            fracture might be covered. Find out how you can get Medicare dental benefits
                                            and
                                            reduce your costs!</p>
                                    </div>
                                </div>
                            </div><!-- Col 2 end -->

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="ts-service-wrapper">
                                    <!-- <div class="ts-service-icon-wrapper">
                                    <span class="ts-service-icon"><i class="fa fa-sliders"></i></span>
                                </div> -->
                                    <div class="ts-service-info">
                                        <h3>Understanding Prescription Drug Coverage</h3>
                                        <p class="value_text">Prescriptions can be an important and costly element of
                                            healthcare, so it’s
                                            critical
                                            to know about your coverage options through Medicare. Original Medicare
                                            doesn’t
                                            include prescription coverage, but some private Medicare plans do, and there
                                            are
                                            several ways to get assistance with RX costs.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- Col 4 end -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-6 py-sm-4 mt-3 px-0">
                <div class="card form-border border-0" id="jornaya_form">
                    <h2 style="margin-bottom: 0!important;background: linear-gradient(75deg, rgb(22 37 103 / 84%) 10%, rgb(230 2 100 / 37%)); color: white; padding: 15px 30px; border-radius: 10px 10px 0px 0px !important;"
                        class="text-center">Medicare Insurance Quote</h2>

                    <form id="final_insurance_form" style="padding: 30px;" method="post"
                        action="{{ route('post') }}" enctype="multipart/form-data">
                        @csrf
                        <input id="leadid_token" name="universal_leadid" type="hidden" value="" />
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" name="first_name" required
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" required
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="email_address">Email Address</label>
                                    <input type="email" id="email_address" name="email_adress" required
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="tel">Phone Number</label>
                                    <input type="tel" id="telle" maxlength="12" name="phone_number" required
                                        class="phone form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <select required id="state" class="form-control" name="state">
                                        <option value="" disabled="" selected="">Select State</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Zip Code</label>
                                    <input type="text" id="zip_code" name="zip_code" required
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="day">Date of Birth</label>

                        </div>
                        <div class="d-md-flex align-items-start">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                                <div class="form-group">
                                    <input type="date" id="birthday" name="birthday"
                                        class="form-group text-muted border rounded col-12 p-2">
                                </div>
                            </div>
                            <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group d-flex align-items-start">
                                    <label for="month"></label>
                                    <select required name="month" id="month" class="form-control">
                                        <option value="0" disabled>DD</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group d-flex align-items-start">
                                    <label for="year"></label>
                                    <select required name="year" id="year" class="form-control">
                                        <option value="0" disabled>Year</option>
                                        <option value="1929">1929</option>
                                        <option value="1930">1930</option>
                                        <option value="1931">1931</option>
                                        <option value="1932">1932</option>
                                        <option value="1933">1933</option>
                                        <option value="1934">1934</option>
                                        <option value="1935">1935</option>
                                        <option value="1936">1936</option>
                                        <option value="1937">1937</option>
                                        <option value="1938">1938</option>
                                        <option value="1939">1939</option>
                                        <option value="1940">1940</option>
                                        <option value="1941">1941</option>
                                        <option value="1942">1942</option>
                                        <option value="1943">1943</option>
                                        <option value="1944">1944</option>
                                        <option value="1945">1945</option>
                                        <option value="1946">1946</option>
                                        <option value="1947">1947</option>
                                        <option value="1948">1948</option>
                                        <option value="1949">1949</option>
                                        <option value="1950">1950</option>
                                        <option value="1951">1951</option>
                                        <option value="1952">1952</option>
                                        <option value="1953">1953</option>
                                        <option value="1954">1954</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <div class="col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="leadid_tcpa_disclosure" required>
                                            </div>
                                        </div>
                                        <div class="col-11 p-0">
                                            <label for="leadid_tcpa_disclosure">
                                                TCPA: By pressing the submit button (1) I consent to receive emails,
                                                telephone calls, text messages, artificial or pre-recorded messages from
                                                <a target="_blank" href="partners">precursor partners</a> and/or any
                                                third-party
                                                partners (or their service
                                                provider <a target="_blank" href="partners">partners</a> on their
                                                behalf)
                                                regarding
                                                their products and services
                                                (Including Final Expense plans at the email address and telephone number
                                                provided, including my wireless phone number (if provided). utilizing an
                                                automated telephone dialling system and I understand that I am not
                                                required
                                                to grant this consent as a condition of purchasing and property, goods
                                                or
                                                services from the foregoing companies (2) I agree to this websites
                                                <a target="_blank" href="{{ route('privacy') }}">Privacy Policy and
                                                    Terms</a> of Use.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary butn2 px-4">Get Quote Now</button>
                        </div>
                    </form>


                </div>

            </div>

        </div>

    </div>

    <!-- Jornaya form end -->
    <!-- about -->
    <section class="w3l-features-photo-7 py-5">
        <div class="container py-md-5 py-4">
            <div class="row w3l-features-photo-7_top d-xs-flex flex-xs-column  d-md-flex flex-md-row">
                <div class="col-md-12 col-lg-6 w3l-features-photo-7_top-left pr-lg-5">
                    <h1 class="mb-2 d-flex justify-content-center p-4" id="about_us"><b>About Us</b></h1>
                    <p class="text-xs-center text-start">TheSeniorQuote is a website that connects you with independent
                        Life licensed insurance agents committed to helping clients of all ages, including baby boomers
                        or seniors with the best options for Medicare Insurance, Guaranteed Whole Life, and No Exam Life
                        Insurance. Our unique online insurance system gives you the ability to compare rates, select
                        benefits, and complete an application online without ever leaving your home or office. Whether
                        you’re very healthy, or you have been declined by other insurance companies due to medical
                        conditions, we have the right solution for your situation.
                    </p>
                    <!-- <div class="row feat_top mt-4 pt-lg-3">
                        <div class="d-flex flex-sm-column justify-content-center justify-content-md-start col-md-6 w3l-features-photo-7-box flex-column flex-sm-row  pb-4">
                            <i class="fa fa-thumbs-o-up d-flex justify-content-center  justify-content-md-start d-xs-block" aria-hidden="true"></i>
                            <h5 class="w3l-feature-text my-2 d-flex justify-content-center justify-content-md-start">Our Mission</h5>
                            <p class="d-flex justify-content-center text-xs-center text-md-start">In a diam et dui elit, orci urna vel id neque. Donec sed tempus enims.</p>
                        </div>
                        <div class="d-flex flex-sm-column justify-content-center col-md-6 w3l-features-photo-7-box flex-column flex-sm-row ">
                            <i class="fa fa-angellist d-flex justify-content-center  justify-content-md-start d-xs-block" aria-hidden="true"></i>
                            <h5 class="w3l-feature-text my-2 d-flex justify-content-center justify-content-md-start">Our Vision</h5>
                            <p class="d-flex justify-content-center text-xs-center text-md-start">Et dui elit, orci urnavel id neque. Donec in a diam sed tempus trsma.</p>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-12 col-lg-6 w3l-features-photo-7_top-right mt-lg-0 mt-sm-5 mt-4">
                    <img src="{{ asset('assets/images/about.jpg') }}" class="img-responsive" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- services section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 py-5">
            <div class="container py-md-5 py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style mb-2" id="services">We Provide Best Services</h3>
                            <p>
                                We always strive to offer infinite value to our clients. Our core specialties are
                                affiliate marketing, lead generation and pay-per-call verticals. If we see an
                                opportunity to find you potential customers, we explore it. We work 24/7 to ensure we
                                are increasing your ROI while assuring all communication and messaging maintains the
                                highest degree of brand identity
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content-sec-11">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services-single d-flex p-sm-5 p-4">
                                <div class="service-icon mr-sm-4 mr-3">
                                    <span class="fa fa-headphones" aria-hidden="true"></span>
                                </div>
                                <div class="services-content">
                                    <h5><a href="services.html">Lead Generation</a></h5>
                                    <p>Double verified Opt-in Data Live Transfers and leads that convert at over 30 %,
                                        providing one of the most aggressive Customer Acquisition costs. Currently
                                        generating 2500 transfers and over 3300 leads monthly</p>
                                    <!--<a href="#services" class="btn read-button d-flex align-items-center mt-4 p-0">Read-->
                                    <!--    More<i class="fa fa-angle-double-right ml-1" aria-hidden="true"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-single d-flex p-sm-5 p-4">
                                <div class="service-icon mr-sm-4 mr-3">
                                    <span class="fa fa-bullhorn" aria-hidden="true"></span>
                                </div>
                                <div class="services-content">
                                    <h5><a href="services.html">INBOUND CUSTOMER SERVICE</a></h5>
                                    <p>INBOUND CUSTOMER SERVICE Flat hourly rates, all costs inclusive, allowing you to
                                        focus on business strategy letting us take care of the back end. Boost your
                                        business by outsouring our area of expertise to us.</p>
                                    <!--<a href="#services" class="btn read-button d-flex align-items-center mt-4 p-0">Read-->
                                    <!--    More<i class="fa fa-angle-double-right ml-1" aria-hidden="true"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="mt-md-5 mt-4 text-center">-->
                    <!--    <a class="btn btn-style-white btn-style-primary" href="services.html">Learn More Services</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- //services section -->

    <!-- stats -->
    <section class="w3_stats py-5" id="stats">
        <div class="container py-md-5 py-4">
            <div class="w3-stats text-center py-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style text-white mb-2">Our Amazing Statistics</h3>
                            <p class="lead text-white">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 d-flex justify-content-center">
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <span class="fa fa-users"></span>
                            <div class="timer count-title count-number mt-3" data-to="60" data-speed="300"></div>
                            <p class="count-text">Employees</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <span class="fa fa-smile-o"></span>
                            <div class="timer count-title count-number mt-3" data-to="8" data-speed="500"></div>
                            <p class="count-text">Statisfication</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-phone"></span>
                            <div class="timer count-title count-number mt-3" data-to="150" data-speed="300"></div>
                            <p class="count-text">Calls Per Day</p>
                        </div>
                    </div>
                    <!--<div class="col-md-3 col-6 mt-md-0 mt-5">-->
                    <!--    <div class="counter">-->
                    <!--        <span class="fa fa-trophy"></span>-->
                    <!--        <div class="timer count-title count-number mt-3" data-to="10630" data-speed="1500"></div>-->
                    <!--        <p class="count-text">Win awards</p>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- customers section -->
    <!--<section class="w3l-customer-block py-5">-->
    <!--    <div class="container py-md-5 py-4">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-md-8">-->
    <!--                <div class="section-heading text-center mb-sm-5 mb-4">-->
    <!--                    <h3 class="title-style mb-2">Testimonials</h3>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="customer-single pr-lg-4">-->
    <!--                    <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue-->
    <!--                        ornare, tempor-->
    <!--                        massa-->
    <!--                        in,-->
    <!--                        luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a-->
    <!--                        quam viverra-->
    <!--                        et.-->
    <!--                    </blockquote>-->
    <!--                    <div class="customer-img d-flex align-items-center mt-4">-->
    <!--                        <img src="{{ asset('assets/images/testi1.jpg') }}" class="img-fluid mr-3"-->
    <!--                            alt="" />-->
    <!--                        <div class="customer-info">-->
    <!--                            <h6>Theo Hall</h6>-->
    <!--                            <small class="mb-0">Marketing Manager</small>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-4 mt-md-0 mt-5">-->
    <!--                <div class="customer-single pr-lg-4">-->
    <!--                    <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue-->
    <!--                        ornare, tempor-->
    <!--                        massa-->
    <!--                        in,-->
    <!--                        luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a-->
    <!--                        quam viverra-->
    <!--                        et.-->
    <!--                    </blockquote>-->
    <!--                    <div class="customer-img d-flex align-items-center mt-4">-->
    <!--                        <img src="{{ asset('assets/images/testi2.jpg') }}" class="img-fluid mr-3"-->
    <!--                            alt="" />-->
    <!--                        <div class="customer-info">-->
    <!--                            <h6>Jenna John</h6>-->
    <!--                            <small class="mb-0">Co-founder of Company</small>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-4 mt-md-0 mt-5">-->
    <!--                <div class="customer-single pr-lg-4">-->
    <!--                    <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue-->
    <!--                        ornare, tempor-->
    <!--                        massa-->
    <!--                        in,-->
    <!--                        luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a-->
    <!--                        quam viverra-->
    <!--                        et.-->
    <!--                    </blockquote>-->
    <!--                    <div class="customer-img d-flex align-items-center mt-4">-->
    <!--                        <img src="{{ asset('assets/images/testi3.jpg') }}" class="img-fluid mr-3"-->
    <!--                            alt="" />-->
    <!--                        <div class="customer-info">-->
    <!--                            <h6>William Due</h6>-->
    <!--                            <small class="mb-0">Team Leader</small>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- //customers section -->

    <!-- blog section -->
    <!--<div class="w3l-grids-block-5 py-5">-->
    <!--    <div class="container py-md-5 py-4">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-md-8">-->
    <!--                <div class="section-heading text-center mb-sm-5 mb-4">-->
    <!--                    <h3 class="title-style mb-2">Our Latest Blog</h3>-->
    <!--                    <p class="lead">-->
    <!--                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque,-->
    <!--                        eaque ipsa quae ab illo inventore.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-4 col-sm-6">-->
    <!--                <div class="blog-card-single">-->
    <!--                    <div class="grids5-info">-->
    <!--                        <a href="#blog"><img src="{{ asset('assets/images/blog1.jpg') }}" alt="" /></a>-->
    <!--                        <div class="blog-info">-->
    <!--                            <h5>November 3, 2020 - <a href="blog-single">New</a></h5>-->
    <!--                            <h4><a href="#blog">Donec sed teus enime</a></h4>-->
    <!--                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="card-footer">-->
    <!--                        <ul class="admin-list d-flex align-items-center justify-content-between">-->
    <!--                            <li><a href="#blog"><span class="fa fa-user-circle" aria-hidden="true"></span>-->
    <!--                                    Admin</a></li>-->
    <!--                            <li><a href="#blog"><span class="fa fa-comments" aria-hidden="true"></span>7-->
    <!--                                    Comments</a>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">-->
    <!--                <div class="blog-card-single">-->
    <!--                    <div class="grids5-info">-->
    <!--                        <a href="#blog"><img src="{{ asset('assets/images/blog3.jpg') }}" alt="" /></a>-->
    <!--                        <div class="blog-info">-->
    <!--                            <h5>November 6, 2020 - <a href="blog-single">New</a></h5>-->
    <!--                            <h4><a href="#blog">It's enim ad minim aute</a></h4>-->
    <!--                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="card-footer">-->
    <!--                        <ul class="admin-list d-flex align-items-center justify-content-between">-->
    <!--                            <li><a href="#blog"><span class="fa fa-user-circle" aria-hidden="true"></span>-->
    <!--                                    Admin</a></li>-->
    <!--                            <li><a href="#blog"><span class="fa fa-comments" aria-hidden="true"></span>3-->
    <!--                                    Comments</a>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-sm-6 mt-lg-0 mt-4">-->
    <!--                <div class="blog-card-single">-->
    <!--                    <div class="grids5-info">-->
    <!--                        <a href="#blog"><img src="{{ asset('assets/images/blog2.jpg') }}" alt="" /></a>-->
    <!--                        <div class="blog-info">-->
    <!--                            <h5>November 7, 2020 - <a href="blog-single">New</a></h5>-->
    <!--                            <h4><a href="#blog">Ullamco laboris nisi uts</a></h4>-->
    <!--                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="card-footer">-->
    <!--                        <ul class="admin-list dlex align-items-center justify-content-between">-->
    <!--                            <li><a href="#blog"><span class="fa fa-user-circle" aria-hidden="true"></span>-->
    <!--                                    Admin</a></li>-->
    <!--                            <li><a href="#blog"><span class="fa fa-comments" aria-hidden="true"></span>5-->
    <!--                                    Comments</a>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- //blog section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style py-5">
            <div class="container py-lg-5 py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style mb-2" id="contact_us">Contact Us</h3>
                            <p class="lead">
                                If you have an immediate need, Speak with a licensed sales agent at +19177302179 / TTY
                                711
                                Our office is open Mon - Thurs 8am - 11pm (EST) toFriday 8am - 9pm (EST)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mx-auto" style="max-width:1100px">
                    <div class="row">
                        <!--<div class="col-lg-4 col-md-6">-->
                        <!--    <div class="contact-address p-4">-->
                        <!--        <div class="contact-icon d-flex align-items-center">-->
                        <!--            <i class="fa fa-map-marker" aria-hidden="true"></i>-->
                        <!--            <div class="ml-3">-->
                        <!--                <h5 class="contact-text">Visit Us:</h5>-->
                        <!--                <a>5th Avenue, USA</a>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-lg-6 col-md-8">
                            <div class="contact-address p-4">
                                <div class="contact-icon d-flex align-items-center">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="ml-3">
                                        <h5 class="contact-text">Call Us:</h5>
                                        <a href="tel:+12 23456790">+19177302179</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="contact-address p-4">
                                <div class="contact-icon d-flex align-items-center">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="ml-3">
                                        <h5 class="contact-text">Mail Us:</h5>
                                        <a href="mailto:info@example.com"> info@theseniorquote.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form pt-5 mt-2">
                        <form action="{{ route('contact_form') }}" method="post" class="cont-form p-sm-5">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="w3lName" placeholder="Full Name"
                                        class="contact-input" />
                                    <input type="text" name="number" id="w3lPhone" placeholder="Phone Number"
                                        class="contact-input" />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="w3lSender" placeholder="E-mail address"
                                        class="contact-input" required />
                                    <input type="text" name="subject" id="w3lSubject" placeholder="Subject"
                                        class="contact-input" />
                                </div>
                            </div>
                            <textarea class="contact-textarea" name="Message" id="w3lMessage" placeholder="Tell us more about your requirements"
                                required></textarea>
                            <div class="text-right">
                                <button class="btn btn-style-white btn-style-primary">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<div class="map">-->
    <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen=""></iframe>-->
    <!--</div>-->
    <!-- //call section -->

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
                                    <li><a href="#contact_us">Contact Us</a></li>
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
                            <li class="d-flex align-items-center py-2"><i class="fa fa-phone mr-2"
                                    aria-hidden="true"></i><a href="tel:+12 23456790">+19177302179</a></li>
                            <li class="d-flex align-items-center py-2"><i class="fa fa-envelope mr-2"
                                    aria-hidden="true"></i><a
                                    href="mailto:info@therevolutiontechnologies.com">info@theseniorquote.com</a></li>
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
                        <a href="https://www.facebook.com/TheRevolutionTechnologies" class="facebook"
                            target="blank"><span class="fa fa-facebook"></span></a>
                        <!--<li class="skype"><a href="callto:babar.nayatel" title="Skype"><i class="icon-skype"></i></a></li>-->
                        <a href="callto:live:uneebmalik_1" class="Skype"><span class="fa fa-skype"
                                target="blank"></span></a>

                        <!--<li class="whatsapp"><a href="whatsapp:+12109489275" title="WhatsApp"><i class="icon-whatsapp"></i></a></li>-->


                        <a href="whatsapp:+923317766777" class="whatsapp"><span class="fa fa-whatsapp"
                                target="blank"></span></a>

                        <!--<a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>-->
                        <!--<a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>-->
                        <!--<a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>-->
                        <a href="https://www.linkedin.com/company/therevolutiontechnologies" class="linkedin"><span
                                class="fa fa-linkedin" target="blank"></span></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //copyright -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="{{ asset('assets/js/theme-change.js') }}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function() {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function(i, char) {
                        setTimeout(function() {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function() {
            // Now to start autoTyping just call the autoType function with the
            // class of outer div
            // The second paramter is the speed between each letter is typed.
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- counter for stats -->
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <!-- //counter for stats -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
    <!-- Jornaya scripts -->
    </div>
    <!-- Body inner end -->
    <!-- <script type="text/javascript">
        function myCallbackFunction(token) {
            var field = document.getElementsByName('leadid_token')[0];
            if (field) {
                field.setAttribute('value', token);
            }
        }
    </script> -->
    <!-- <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }
        });
    </script> -->
    <!--
    <noscript>
        <img src='//create.leadid.com/noscript.gif?lac=0A9F63A2-B4D2-9E2C-9F91-7743F94AEE75&lck=ac1199c1-3317-c118-c702-bba6f694052b&snippet_version=2' />
    </noscript>
    <script>
        $('#final_insurance_form').on('submit', function() {
            iziToast.show({
                // title: 'Hey',
                message: 'Form submitted successfully!',
                timeout: 5000,

            });
        });
    </script> -->

    </div><!-- Body inner end -->
    <script id="LeadiDscript" type="text/javascript">
        (function() {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/2fff7440-1166-235b-b787-a80497771b23.js?snippet_version=2';
            var LeadiDscript = document.getElementById('LeadiDscript');
            LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
        })();
    </script>
    <noscript><img
            src='//create.leadid.com/noscript.gif?lac=7db0b3f6-5ebe-bf67-cd86-eb24a69f0c43&lck=2fff7440-1166-235b-b787-a80497771b23&snippet_version=2' />
    </noscript>

    <script>
        var tele = document.querySelector('#telle');

        tele.addEventListener('keydown', function(e) {
            if (event.key != 'Backspace' && (tele.value.length === 3 || tele.value.length === 7)) {
                tele.value += '-';
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".phone").inputmask("(999)-999-9999");
        });
    </script>


</body>

</html>
