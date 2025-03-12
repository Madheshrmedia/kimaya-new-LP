<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimaya Clinique</title>
    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="./image/KimayaFavicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <!-- swiper js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- count api -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.8/countUp.umd.js"></script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TGR484FT');</script>


    <style>
        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Black.otf') format('opentype');
            font-weight: 900;
            /* Black */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Bold.otf') format('opentype');
            font-weight: 700;
            /* Bold */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Book-.otf') format('opentype');
            font-weight: 400;
            /* Book */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Book-Italic.otf') format('opentype');
            font-weight: 400;
            /* Book Italic */
            font-style: italic;
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Medium.otf') format('opentype');
            font-weight: 500;
            /* Medium */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Semi-Bold.otf') format('opentype');
            font-weight: 600;
            /* Semi-Bold */
        }

        @font-face {
            font-family: 'Magenta';
            src: url('fonts/fonnts.com-Magneta-Thin.otf') format('opentype');
            font-weight: 100;
            /* Thin */
        }

        * {
            font-family: 'Magenta' !important;
        }

        html {
            overflow-x: hidden;
        }

        body {
            overflow-x: hidden;
        }

        #headerall {
            background: #000000 !important;
            z-index: 7;
            position: relative;
        }


        .header .navbar .navbar-nav .nav-item .nav-link {
            color: #ffffff;
            font-size: 18px;
        }

        .header {
            padding: 0px;
        }

        .header-cont a {
            margin-right: 15px;
            /* Adjust spacing as needed */
        }

        .header-cont a:last-child {
            margin-right: 0;
            /* Removes margin from the last item */
        }

        .header-logo {
            width: 150px;
        }

        .getstart {
            color: white !important;
        }

        .topbar {
            background-color: #162F33;
        }

        /* .header-logo {
            width: 70px;
            height: 70px;
        } */

        .header-icon {
            width: 40px;
            margin-right: 10px;
        }

        .contact-info {
            color: black;
            text-decoration: none;
        }

        .contact-info p {
            margin: 0;
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-left: 8px;
        }

        .booknow-btn {
            text-decoration: none;
            padding: 10px 25px;
            background: #DDAB07;
            color: white;
            /* margin-left: 30px; */
        }

        .header .navbar .navbar-nav .nav-item .nav-link {
            margin-right: 30px;
            font-weight: 300;
        }

        /* .navbar-brand {
            display: none;
        } */

        .header-icon {
            width: 25px;
        }

        h2,
        h4,
        h5 {
            font-weight: 500 !important;
        }

        .banner {
            display: block;
        }

        .mob-banner {
            display: none;
            padding: 0px;
        }

        @media only screen and (max-width: 600px) {


            /* .navbar-brand {
                display: block;
            } */

            .navbar {
                padding: 5px !important;
                background: #040404;
            }

            .navbar-toggler {
                border-color: white;
                margin-right: 10px;
            }

            .banner {
                display: none;
            }

            .mob-banner {
                display: block;
                padding: 0px;
            }

            .nav-container {
                padding: 0px;
            }

            .navbar-collapse {
                padding: 10px 30px;
            }

            .header-cont {
                display: block !important;
            }

            .contact-info {
                margin-bottom: 25px;
            }

            .booknow-btn {
                margin-left: 0px;
            }

            .pop_upicon {
                display: none !important;
            }

            .modal-title {
                font-size: 28px !important;
            }

            .pop_upimg {
                display: none !important;
            }

            .tis_test_col {
                margin-top: 30px !important;
            }

            .foot-service {
                margin-top: 15px;
            }


        }

        .pop_upicon {
            width: 180px;
        }

        .modal-title {
            font-size: 34px;
        }

        .span_title {
            color: #DDAB07;
        }

        .position-relative {
            position: relative;
        }

        .icon-select {
            left: 15px;
            /* Adjust as needed */
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2em;
            /* Adjust icon size */
            color: #6c757d;
            /* Optional: set icon color */
        }

        .form-select.ps-5 {
            padding-left: 2.5rem;
            /* Adjust padding to make space for the icon */
        }

        .btn_pop {
            background: #DDAB07;
            color: white;
        }

        .btn_pop:hover {
            background: gray;
            color: white;
        }

        .btn-close {
            margin: 0px 10px !important;
        }

        .pop_upicon {
            width: 110px;
        }

        .banner-img {
            /* margin-top: -60px; */
            padding: 0px;
        }

        .banner-head {
            line-height: 60px;
            font-size: 44px;
        }

        .banner-cont {
            font-size: 24px;
        }

        .banner-span {
            color: #F21D1D;
            font-weight: mixed;
        }

        .counter {
            font-size: 48px;
        }

        .rev-test {
            margin-top: 60px;
        }

        .ban-testi {
            margin-left: 50px;
        }

        .ban-test-cont {
            font-size: 22px;
        }

        .ban-rev {
            width: 130px;
        }

        .banner-maincont {
            position: absolute;
            margin-top: 50px;
            margin-left: 75px;
        }

        .banner-btn {
            text-decoration: none;
            padding: 14px 28px;
            background: #DDAB07;
            color: white;
            font-size: 18px;
        }

        .comp {
            width: 335px;
            padding: 7px 105px;
            margin-left: -105px;
            border-radius: 20px;
            font-size: 22px;
            text-transform: uppercase;
            background: linear-gradient(0deg, #EFD78A 0%, #FFE285 41%, #FFD243 100%);
            margin-top: 25px;
        }


        .comp-btn {
            background: #000000;
            color: white;
            padding: 10px 30px;
            border-radius: 21px;
        }

        .comp-btn-nail {
            background: #000000;
            color: white;
            padding: 10px 30px;
            border-radius: 21px;
            margin-left: 25px;
        }

        .comp-cont {
            margin-top: 40px;
        }

        .utp_head {
            font-size: 48px;
        }

        .utp_card_header {
            background: #DDAB07;
            color: white;
            font-size: 24px;
            border-color: #DDAB07;
        }

        .utp_card {
            border-color: #DDAB07;
        }

        .utp_card_body {
            font-size: 20px;
        }

        .utp_card_text {
            color: #616366;
        }

        .utp_card {
            margin-top: -65px;
        }


        .comp-card {

            padding: 7px 50px;
            /* right: -15px;
            position: absolute; */
            border-radius: 20px;
            font-size: 22px;
            text-transform: uppercase;
            background: #DDAB07;
            color: white;
            margin-top: 25px;
        }

        .comp-btn-nail_card {
            background: #000000;
            color: white;
            padding: 10px 30px;
            border-radius: 21px;
            width: 105px;
            /* margin-left: 25px; */
        }

        .comp_card_cont {
            width: 140px;
            margin-top: 40px;
            text-align: center;
        }

        .upt_card_app {
            margin-top: 40px;
        }

        .upt_sep_col {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .this_testimonial {
            background: rgba(221, 171, 7, 0.1);
        }

        .tis_test_card {
            border-radius: 15px;
            border-color: #DDAB07;
        }

        .tis_tci {
            width: 50px;
        }

        .tis_test_card_txt {
            font-size: 20px;
            color: #664A33;
        }

        .card-footer {
            background: #AF6503;
            border-bottom-left-radius: 13px !important;
            border-bottom-right-radius: 13px !important;
            color: #FFFFFF !important;
        }

        .navbar-toggler {
            background: white;
        }

        .get_cel_card {
            padding-top: 75px;
            padding-right: 150px;
        }

        .get_cele_cont {
            font-size: 20px;
            color: #122132;
        }

        .b_a_trans {
            background-color: rgba(221, 171, 7, 0.1);

        }
    </style>
</head>


<body>
    <header class="header header-sticky" id="headerall">

        <nav class="navbar navbar-expand-lg navbar-light shadow px-5 sticky-top">
            <div class="container-fluid nav-container">
                <a class="navbar-brand" href="./index.php"><img src="./image/kimaya_logo.png" alt="kimaya logo"
                        class="header-logo"></a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span><img src="./image/bars-solid.svg" width="20" height="20" /></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#Transformations">Transformation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#testimonial">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#faqframe">FAQ</a>
                        </li>
                    </ul>
                    <div class="d-flex header-cont align-items-center">

                        <a href="./#book_app_id" class="booknow-btn">
                            Book an Appointment
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </header>




    <!-- banner -->
    <div class="container-fluid banner">
        <div class="row">
            <img src="./image/ban1.webp" class="img-fluid banner-img" alt="best aesthetic clinic">

        </div>
    </div>

    <!-- mobile banner -->
    <div class="container-fluid mob-banner">
        <img src="./image/Group 31860 (1).webp" class="img-fluid" alt="best clinic ">
    </div>

    <!-- Get celebrity smooth skin -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-3">
                <div class="row">
                    <div class="col-md-8 my-auto get_cel_card ">
                        <h1 class="get_cele_skin mb-3">
                            Get celebrity smooth skin with LHR at kimaya
                        </h1>
                        <p class="get_cele_cont">
                            Tired of waxing and shaving? Our Unlimited Laser Hair Removal gives you long-lasting smooth
                            skin by
                            reducing hair growth at the root - completely pain-free! The laser targets hair follicles,
                            heating
                            them to prevent future growth while leaving the surrounding skin unharmed.
                        </p>
                    </div>
                    <div class="col-md-4 get_cele_img">
                        <img src="./image/getcel.webp" class="img-fluid" alt="best aesthetic clinic in chennai">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Before and After Transformations -->

    <div class="container-fluid b_a_trans my-5 p-5" id="Transformations">
        <div class="row">
            <h1 class="utp_head ">
                Before and After Transformations
            </h1>

            <div class="col-md-4 mt-5">
                <img src="./image/ba1.webp" class="img-fluid" alt="best aesthetic clinic">
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/ba2.webp" class="img-fluid" alt="top aesthetic clinic">
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/ba3.webp" class="img-fluid" alt="top aesthetic clinic">
            </div>

        </div>
    </div>

    <!-- This could be you! -->
    <style>
        #testimonial {
            text-align: center;
        }

        #testimonialrow {
            margin-top: 2rem;
        }

        .card-body {
            text-align: left;
        }

        .card-img-top {
            width: 135px !important;
        }

        .card-footer {
            padding: 1rem;
        }

        @media (max-width:768px) {
            .tis_test_col {
                margin-top: 1rem;
            }
        }
    </style>
    <div class="container-fluid my-5 " id="testimonial">
        <h1>Review</h1>

        <div class="row p-5 ">

            <div class="col-md-4  tis_test_col">
                <div class="card tis_test_card">
                    <img class="card-img-top py-4 px-5" src="./image/vector.png" alt="Card image cap">
                    <div class="card-body px-5">

                        <p class="card-text tis_test_card_txt ">The Brightening Peel made my skin glow! My dark spots
                            have lightened,
                            and my skin looks so much healthier. I love the results and will definitely be coming back
                            for more treatments!<span style="visibility:hidden">fdsffsfdsdffdsf</span></p>

                    </div>
                    <div class="card-footer d-flex align-items-end text-muted px-5">
                        <img src="./image/ttci1.png" class="tis_tci" alt="">
                        <p class="ps-3"> — Shalini P </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 tis_test_col ">
                <div class="card tis_test_card">
                    <img class="card-img-top py-4 px-5" src="./image/vector.png" alt="Card image cap">
                    <div class="card-body px-5">

                        <p class="card-text tis_test_card_txt ">I’ve struggled with acne for years, but the Acne Control
                            Peel has helped
                            clear my skin. My breakouts are fewer,
                            and my complexion is smoother. I’m so happy with the progress I’ve seen.</p>

                    </div>
                    <div class="card-footer d-flex align-items-end text-muted px-5">
                        <img src="./image/ttci2.webp" class="tis_tci" alt="">
                        <p class="ps-3">-— Kiran T</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 tis_test_col ">
                <div class="card tis_test_card">
                    <img class="card-img-top py-4 px-5" src="./image/vector.png" alt="Card image cap">
                    <div class="card-body px-5">

                        <p class="card-text tis_test_card_txt ">I tried the Anti-Aging Peel, and it worked wonders on my
                            fine lines. My skin feels firmer,
                            and I can see a visible difference in its texture. I feel like I’ve turned back the clock on
                            my skin!</p>

                    </div>
                    <div class="card-footer d-flex align-items-end text-muted px-5">
                        <img src="./image/ttci3.png" class="tis_tci" alt="">
                        <p class="ps-3">— Meena J</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    footer {
        background: #122132;
    }

    .footer-cardfirst,
    .footer-cardsec,
    .footer-cardthir,
    .footer-cardfour {
        color: white;
        border-right: 1px solid rgba(255, 255, 255, 0.3);
        padding: 0px 50px;
    }

    .footer-cardfiv {
        color: white;
        padding: 0px 50px;
    }

    .ser-head {
        font-size: 28px;
    }

    .foot-fb {
        width: 30px;
        margin-bottom: 22px;
    }

    .footer-row {
        padding-top: 50px;
    }

    .foot-serlink a {
        text-decoration: none;
        color: white;
        margin-top: 10px;
        display: inline-block;
        /* Ensure margin is applied correctly on each link */
    }

    .ser-head {
        margin: 30px 0px;
    }

    .foot-serhed,
    .foot-addhed {
        font-weight: 900;
    }

    .add-smal {
        margin-bottom: 10px;
        display: inline-block;
    }

    .end-footer {
        background: #CDB167;
    }
</style>
<!-- ---choose kimaya------------ -->
<style>
    #choosecontainer {
        text-align: center;
    }

    #choosecontainer .card {
        border: none;
    }

    #choosecontainer .card-img-top {
        margin: auto;
    }

    #choosecontainer .card-title {
        text-align: center;
        color: rgba(18, 33, 50, 0.8);
    }

    #choosecontainer .row {
        margin-top: 3rem;
    }

    #kimroundlogo {
        margin-bottom: 20px;
    }
</style>
<div class="container" id="choosecontainer">
    <h1>Why choose Kimaya?</h1>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="card" style="width: 100%;">
                <img src="./image/card1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Certified doctors </h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card" style="width: 100%;">
                <img src="./image/Capa_1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">10+ years of expertise </h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card" style="width: 100%;">
                <img src="./image/Frame.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">5K+ happy clinets</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="card" style="width: 100%;">
                <img src="./image/fi_1365307.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">4.9 Google rating</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card" style="width: 220px;margin: auto;">
                <img src="./image/kimroundlogo.webp" id="kimroundlogo">

            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card" style="width: 100%; ">
                <img src="./image/fi_4807695.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Treatments are performed by doctors</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---start FAQ frame------------ -->
<div class="container" id="faqframe">
    <h1>FAQ’s</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Is laser hair removal permanent?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Laser hair removal significantly reduces hair growth and can lead to permanent
                        results with multiple sessions. However, occasional maintenance sessions may be needed.</p>


                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How many sessions do I need?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Most people require 6-8 sessions, depending on hair type, skin tone, and the area being treated
                        for the best results.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Is it safe for all skin types?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes! Advanced laser technology is customized for different skin tones, making it safe and
                        effective for all skin types.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    What areas can be treated?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Laser hair removal can be done on any part of the body, including the face, legs, arms,
                        underarms, bikini area, and full body.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                    How long can I avail this service, and how many sessions will I get?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Our laser hair removal package includes unlimited sessions and is valid for 3 years when you
                        choose the ₹49,999 package. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #faqframe {
        margin: 3rem auto;
    }

    .accordion {
        margin-top: 3rem;
    }

    .accordion-button:not(.collapsed) {
        background-color: #DDAB07;
        box-shadow: none;
        color: #FFFFFF;
        font-size: 25px;
        font-weight: 600;
    }

    .accordion-body {
        font-size: 19px;
    }

    .accordion-button {
        font-size: 25px;
    }
</style>
<!-- ---end FAQ frame------------ -->




<style>
    .base-template__wrapper {
        max-width: 1560px;
    }

    .base-template__text {
        margin-bottom: 60px;
    }

    /**
 * Slider Instance
 */

    .swiper {
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .booking-slider {
        --color-gray: #b3b3b3;
        --color-gray-dark: #FCF7E6;
        --color-gray-bright: #d0d4d4;
        --color-gray-light: #bbbcbf;

        padding-inline: 98px;
        position: relative;
    }

    .booking-slider__slide {
        display: flex;
        align-items: center;
        min-height: 650px;
    }

    @media screen and (max-width: 991.9px) {
        .booking-slider {
            padding: 0;
            margin-inline: -20px;
        }
    }

    /**
 * Slider Navigation
 */

    .slider-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        position: absolute;
        top: 50%;
        left: 0;
        translate: 0 -50%;
        z-index: 1;
        pointer-events: none;
    }

    .slider-nav__item {
        display: flex;
        align-items: center;
        justify-content: center;
        aspect-ratio: 1;
        width: 48px;
        pointer-events: auto;
        cursor: pointer;
        transform-origin: center;
        transition: all 0.3s ease-out;
    }

    .slider-nav__item.disabled {
        pointer-events: none;
        cursor: default;
        opacity: 0.5;
    }

    .slider-nav__item path {
        stroke: currentColor;
    }

    @media (hover: hover) and (pointer: fine) {
        .slider-nav__item:not(.disabled):hover {
            transform: scale(1.1);
        }
    }

    @media (hover: none) {
        .slider-nav__item:not(.disabled):active {
            transform: scale(1.1);
        }
    }

    @media screen and (max-width: 991.9px) {
        .slider-nav {
            display: none;
        }
    }

    /**
 * Slider Pagination
 */

    .slider-pagination {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 8px;
        padding-top: 40px;
    }

    .swiper-pagination-lock {
        display: none !important;
    }

    .slider-pagination__item {
        width: 8px;
        height: 8px;
        border-radius: 99px;
        background: #fff;
        transition: all 0.3s ease-out;
        opacity: 0.2;
    }

    .slider-pagination__item.active {
        width: 30px;
        opacity: 1;
    }

    /**
 * Slider Item
 */

    .swiper-slide {
        width: auto;
        height: auto;
    }

    @keyframes btn-arrow-move {
        0% {
            translate: 0;
        }

        100% {
            translate: 100% -100%;
        }
    }

    .booking-slider-item {
        background: var(--color-gray-dark);
        position: relative;
        overflow: hidden;
    }

    .booking-slider-item__badge {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 4px 10px;
        background-color: rgba(0, 0, 0, 0.6);
        font-size: 14px;
        font-weight: 400;
        line-height: calc(24 / 14);
        position: absolute;
        left: 4px;
        top: 4px;
        z-index: 1;
    }

    .booking-slider-item__badge::before {
        content: "";
        flex-shrink: 0;
        display: block;
        aspect-ratio: 1;
        width: 18px;
        background: url("https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-stars.svg") center center no-repeat;
        background-size: 100%;
    }

    .booking-slider-item__image {
        display: block;
        height: 350px;
        transition: height 0.6s ease-out;
        overflow: hidden;
    }

    .booking-slider-item__image img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transform-origin: center;
        transition: transform 0.6s ease-out;
    }

    @media (hover: hover) and (pointer: fine) {
        .booking-slider-item__image:hover img {
            transform: scale(1.05);
        }
    }

    .booking-slider-item__content {
        padding: 30px;
        color: #664A33;
    }

    @media screen and (max-width: 574.9px) {
        .booking-slider-item__content {
            padding: 30px 20px;
        }
    }

    .booking-slider-item__price {
        font-weight: 600;
        font-size: 24px;
        line-height: 1.3;
        margin-bottom: 16px;
    }

    .booking-slider-item__price small {
        font-weight: 400;
        font-size: 18px;
    }

    .booking-slider-item__title {
        font-weight: 600;
        font-size: 18px;
        line-height: 1.3;
        margin-bottom: 16px;
    }

    .booking-slider-item__title a {
        display: block;
        color: white;
        text-decoration: none;
        transition: opacity 0.3s ease-out;
    }

    @media (hover: hover) and (pointer: fine) {
        .booking-slider-item__title a:hover {
            opacity: 0.75;
        }
    }

    .booking-slider-item__address {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
        font-size: 14px;
        color: var(--color-gray);
        margin-bottom: 16px;
    }

    .booking-slider-item__address-icon {
        flex-shrink: 0;
        width: 16px;
    }

    .booking-slider-item__address-icon img {
        display: block;
        width: 100%;
        height: auto;
    }

    .booking-slider-item__text {
        font-size: 14px;
        font-weight: 300;
        line-height: 1.35;
        color: var(--color-gray-bright);
    }

    .booking-slider-item__footer {
        max-height: 150px;
        overflow: hidden;
        transition: max-height 0.6s ease-in;
    }

    .booking-slider-item__footer-inner {
        padding-top: 24px;
    }

    .booking-slider-item__amenities {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        padding-block: 20px;
        border: 1px solid #ffffff1a;
        border-left: 0;
        border-right: 0;
        margin-bottom: 24px;
    }

    .booking-slider-item__amenity {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
        font-size: 14px;
        line-height: 1.4;
        color: var(--color-gray-light);
    }

    .booking-slider-item__amenity-icon {
        flex-shrink: 0;
        width: 20px;
    }

    .booking-slider-item__amenity-icon img {
        display: block;
        width: 100%;
        height: auto;
    }

    .booking-slider-item__amenity-text {
        padding-top: 2px;
    }

    @media screen and (max-width: 574.9px) {
        .booking-slider-item__amenity {
            gap: 6px;
            font-size: 12px;
        }

        .booking-slider-item__amenity-icon {
            width: 16px;
        }

        .booking-slider-item__amenity-text {
            padding-top: 1px;
        }
    }

    .booking-slider-item__btn {
        display: flex;
        align-items: center;
        gap: 4px;
        font-weight: 500;
        font-size: 18px;
        color: #fff;
        text-decoration: none;
    }

    .booking-slider-item__btn-icon {
        flex-shrink: 0;
        display: block;
        aspect-ratio: 1;
        width: 24px;
        position: relative;
        overflow: hidden;
    }

    .booking-slider-item__btn-icon::before,
    .booking-slider-item__btn-icon::after {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        background: url("https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-btn-arrow.svg") center center no-repeat;
        background-size: 100%;
    }

    .booking-slider-item__btn-icon::after {
        position: absolute;
        top: 100%;
        right: 100%;
    }

    .booking-slider__slide:not(.swiper-slide-active) .booking-slider-item__image {
        height: 165px;
    }

    .booking-slider__slide:not(.swiper-slide-active) .booking-slider-item__footer {
        max-height: 0;
    }

    @media (hover: hover) and (pointer: fine) {

        .booking-slider-item__btn:hover .booking-slider-item__btn-icon::before,
        .booking-slider-item__btn:hover .booking-slider-item__btn-icon::after {
            animation: btn-arrow-move 0.4s ease forwards;
        }
    }

    @media (hover: none) {

        .booking-slider-item__btn:active .booking-slider-item__btn-icon::before,
        .booking-slider-item__btn:active .booking-slider-item__btn-icon::after {
            animation: btn-arrow-move 0.4s ease forwards;
        }
    }
</style>






<style>
    .book_app {
        border: 1px solid #DDAB07;
        border-radius: 10px;
        padding: 30px;
    }
</style>

<!-- other services -->

<div class="container other_service my-5">

    <h1 class="oserhead mb-5">
        Glow with our other Services
    </h1>

    <!-- Swiper -->
    <div class="swiper slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="./#book_app_id">
                    <img src="./image/oser1.webp" alt="top aesthetic clinic in chennai" class="img-fluid banner_img">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./#book_app_id">
                    <img src="./image/oser2.webp" alt="top aesthetic clinic in chennai" class="img-fluid banner_img">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./#book_app_id">
                    <img src="./image/oser3.webp" alt="top aesthetic clinic in chennai" class="img-fluid banner_img">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./#book_app_id">
                    <img src="./image/oser4.webp" alt="top aesthetic clinic in chennai" class="img-fluid banner_img">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="./#book_app_id">
                    <img src="./image/oser5.webp" alt="top aesthetic clinic in chennai" class="img-fluid banner_img">
                </a>
            </div>
        </div>
    </div>

</div>

<div class="container my-5">

    <div class="row">
        <div class="col-md-6 mx-auto book_app" id="book_app_id">
            <h2 class="text-center">Book An Appointment</h2>
            <form id="appointmentForm">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Full name" name="name" >
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter Phone No" name="phone" >
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" placeholder="Full name" name="date" >
                    </div>
                    <div class="col-md-12 mt-3">
                    <label for="branch" class="form-label">Choose Branch</label>

                    <select class="form-select" name="branch" id="branch" required>
    <option value="">Select a Branch</option>  <!-- Ensure there's a default option -->
    <option value="Anna nagar">Anna Nagar</option>
    <option value="Adyar">Adyar</option>
</select>
                        <div class="invalid-feedback">
                            Please select a location
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="skin_concern" class="form-label">Type your skin concern</label>
                        <textarea name="skin_concern" class="form-control" rows="3" cols="" id="skin_concern"></textarea>
                    </div>


                    <div class="col-md-6  mt-3">
                        <button class="btn btn_pop" type="submit">Confirm Appointment</button>
                    </div>
                </div>
            </form>
            <script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("appointmentForm").addEventListener("submit", async function(event) {
        event.preventDefault();
        submitForm();
    });
});

async function submitForm() {
    const name = document.getElementById("name")?.value;
    const phone = document.getElementById("phone")?.value;
    const date = document.getElementById("date")?.value;
    const branch = document.getElementById("branch")?.value;
    const skinConcern = document.getElementById("skin_concern").value;
console.log("name",name);
console.log("name",phone);
console.log("name",date);
console.log("name",branch);
console.log("name",skinConcern);
    if (!name ) {
        alert("Please fill in all required fields.");
        return;
    }

    const formData = { name, phone, date, branch, skin_concern: skinConcern };

    try {
        const response = await fetch("https://admin-backend.kimayaclinique.com/store-lplead", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(formData)
        });

        if (response.ok) {
            console.log("response",response);
            
            alert("Appointment confirmed successfully!");
            document.getElementById("appointmentForm").reset();
        } else {
            alert("Failed to confirm appointment. Please try again.");
        }
    } catch (error) {
        console.error("Error submitting form:", error);
        alert("An error occurred. Please try again.");
    }
}

</script>
        </div>
    </div>
</div>


<style>
    .buttongrp {
        text-align: center;
    }

    #buttonbook {
        font-size: 18px;
        background-color: #DDAB07;
        color: #FFFFFF;
        border: 1px solid #FAD064;
        padding: 8px 20px;
        border-radius: 0 !important;
    }
</style>
<!-- ---start FAQ frame------------ -->

<style>
    #faqframe {
        margin: 3rem auto;
    }

    .accordion {
        margin-top: 3rem;
    }

    .accordion-button:not(.collapsed) {
        background-color: #DDAB07;
        box-shadow: none;
        color: #FFFFFF;
        font-size: 25px;
        font-weight: 600;
    }

    .accordion-body {
        font-size: 19px;
    }

    .accordion-button {
        font-size: 25px;
    }
</style>
<!-- ---end FAQ frame------------ -->
<!-- Background Overlay -->
<div id="popupOverlay"></div>

<!-- Popup Content -->
<div class="row" id="coutpop">
    <div class="col-md-12 mx-auto">
        <div class="column" id="colunm2">
            <span id="closePopup" class="close-btn">&times;</span> <!-- Close Button -->
            <p>Offer Expires in</p>
            <div class="clock-container">
                <div class="clock-col" style="display:none">
                    <div class="clock-days clock-timer">&nbsp;</div>
                    <div class="clock-label label-days">Days</div>
                </div>
                <div class="clock-col">
                    <div class="clock-hours clock-timer">&nbsp;</div>
                    <div class="clock-label label-hour">Hours</div>
                </div>
                <div class="clock-col">
                    <div class="clock-minutes clock-timer">&nbsp;</div>
                    <div class="clock-label label-minutes">Minutes</div>
                </div>
                <div class="clock-col">
                    <div class="clock-seconds clock-timer">&nbsp;</div>
                    <div class="clock-label label-seconds">Seconds</div>
                </div>
                <a type="button" href="./#book_app_id" class="btn btn-secondary" style="bottom: -10px;"
                    id="bookbutton">Book an
                    Appointment</a>
                <span class="popbtnspan"></span>
            </div>
        </div>
    </div>
</div>

<style>
    /* Background Overlay */
    #popupOverlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        /* Black with 70% transparency */
        z-index: 999;
        /* Below the popup but above everything else */
        display: none;
        /* Initially hidden */
    }

    /* Popup Box */
    #coutpop {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        z-index: 1000;
        /* Above the overlay */
        display: none;
        /* Initially hidden */
    }

    /* Close Button */
    .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 20px;
        cursor: pointer;
    }

    .column p {
        margin-top: 20px;
        margin-bottom: -35px;
        z-index: 1;
        position: relative;
    }

    .clock-container {
        position: relative;
        display: flex;
        gap: 51px;
        justify-content: center;
        border-radius: 8px;
        color: black;
        background-color: rgb(255, 255, 255);
        margin: auto;
        padding: 3rem;
        width: 100%;

    }

    #bookbutton {
        position: absolute;
        padding: 12px 15px;
        width: 70%;
        bottom: -18px;
        left: 50%;
        transform: translateX(-50%);
        color: #FFFFFF;
        background-color: #DDAB07;
        text-transform: uppercase;
        border-radius: 0px;
        border: none;

    }

    .clock-timer {
        font-size: 55px;
        font-weight: bold;
    }

    #colunm2 {
        text-align: center !important;
    }

    #colunm2 p {
        font-size: 28px;
    }

    .text {
        font-size: 60px;
    }

    /* Parent container with background image */
    .background-container {
        background: url('./image/timerbanner.webp') no-repeat center center/cover;
        width: 100%;

        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    /* Inner content */
    #counterframe .content {
        width: 98%;
        max-width: 1200px;

        padding: 20px;

    }

    /* Row styling */
    #counterframe .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    /* Column styling */
    #counterframe .column {
        flex: 1;
        min-width: 250px;
        padding: 20px;

        text-align: left;
    }

    #limitbutton {
        padding: 13px 16px;
        margin-top: 2rem;
        background-color: #FFF4D6;
        color: #122132;
        border: 1px solid #000000;
        font-weight: bold;
    }

    #colunm1 {
        font-weight: bold;
    }

    .clock-label {
        color: #AF6503;
        text-transform: uppercase;
    }

    @media (max-width: 768px) {
        #counterframe .row {
            flex-direction: column;
        }

        .text {
            font-size: 40px;
        }

        .clock-timer {
            font-size: 35px;
        }
    }
</style>
<!-- ---end counter frame------------ -->

<footer>
    <div class="container-fluid">
        <div class="row footer-row">
            <div class="col-md-3 footer-cardfirst">
                <img src="./image/kimaya_logo.png" class="img-fluid footer-logo" alt="">
                <p class="footer-logo-cont my-4">
                    Take the first step towards achieving your beauty goals with expert care at Kimaya Clinique
                </p>
                <a href="./#book_app_id" class="booknow-btn ">
                    Book an Appointment
                </a>
            </div>
            <div class="col-md-3 footer-cardsec foot-service">
                <p class="ser-det">
                    Skin | Hair | Laser | Dental | Nails
                </p>
                <h5 class="ser-head">
                    Visit the best skin clinic now!
                </h5>

                <p class="ser-time">
                    Monday - Sunday <br>
                    10:30 am- 08:30 pm
                </p>

            </div>
            <div class="col-md-2 footer-cardthir">
                <p class="foot-serhed">
                    Links
                </p>
                <div class="foot-serlink">
                    <a href="./#service" class="foot-alink">Service</a> <br>
                    <a href="./#Transformations" class="foot-alink">Before & after</a> <br>
                    <a href="./#testimonial" class="foot-alink">Testimonial</a>
                </div>
            </div>
            <div class="col-md-3 footer-cardfour">
                <p class="foot-addhed">
                    Say hello to us
                </p>
                <p class="foot-eid mt-4">
                    info@kimayaclinique.com
                </p>
                <p class="foot-add">
                    <small class="add-smal">Address</small><br>
                    No 1, First Floor, 2nd Ave, AD Block, Anna Nagar, Chennai, Tamil Nadu 600040 <br>
                    +91 9884567000
                    <br>
                    <br>
                    NEW NO 29, OLD NO 24, Gandhi Nagar 1st Main Road, Gandhi Nagar, Adyar, Chennai, Tamil Nadu 600020
                    <br>
                    +91 9884287000
                </p>
            </div>
            <div class="col-md-1 footer-cardfiv">
                <a href="https://www.facebook.com/people/kimaya-clinique/100092896905026/" target="_blank"><img
                        src="./image/fb-icon.png" class="foot-fb" alt=""></a><br>
                <a href="https://www.instagram.com/kimaya_clinique/" target="_blank"><img src="./image/ig-icon.png"
                        class="foot-fb" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<section class="end-footer d-flex justify-content-between px-5">
    <p class="text-center py-3 mb-0">
        © 2024-2027, All Rights Reserved
    </p>
    <a href="#" data-bs-toggle="modal" data-bs-target="#termsandcont" class="text-center py-3 mb-0">
        Term’s & Conditions
    </a>
    <!-- Modal -->
    <div class="modal fade" id="termsandcont" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Terms and Conditions</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    I agree to be contacted by Kimaya Clinique - Skin & Hair Clinic over phone text and email. I do not
                    have any objection to receiving emails, messages (SMS or any other mode) and calls. This consent
                    shall supersede any preferences set through Do Not Disturb (DND Register)/ National Customer
                    Preference Register (NCPR).
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>



    var swiper = new Swiper(".mySwiper", {
        speed: 600,
        parallax: true,
        loop: true, // Enable looping
        autoplay: {
            delay: 4000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

    var swiper = new Swiper(".slider", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
            pauseOnMouseEnter: true, // Autoplay will pause on hover
        },

        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 4, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }
    });

    var swiper = new Swiper(".aesthetic_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 3, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }
    });

    var swiper = new Swiper(".af_p_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 3, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }


    });


    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()






    // counter
    const counter = new countUp.CountUp('counter', 5000, {
        duration: 4,
        suffix: "+"  // Add "+" at the end of the count
    });

    if (!counter.error) {
        counter.start();
    } else {
        console.error(counter.error);
    }





</script>
<script>
    window.onload = function () {
        const controller = new AbortController();
        // Set the date we're counting down to
        const countDownDate = new Date("Feb 27, 2026 08:30:00").getTime();
        const clockDaysElement = document.querySelector(".clock-days");
        const clockHoursElement = document.querySelector(".clock-hours");
        const clockMinutesElement = document.querySelector(".clock-minutes");
        const clockSecondsElement = document.querySelector(".clock-seconds");
        // Create an animation callback every second:
        animationInterval(1000, controller.signal, (time) => {
            // Get today's date and time
            let now = new Date().getTime();

            // Find the distance between now and the count down date
            let distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the results
            clockDaysElement.textContent = days;
            clockHoursElement.textContent = hours;
            clockMinutesElement.textContent = minutes;
            clockSecondsElement.textContent = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                controller.abort();
                document.querySelector(".clock-container").innerHTML = "EXPIRED";
            }
        });
    };

    function animationInterval(ms, signal, callback) {
        // Prefer currentTime, as it'll better sync animtions queued in the
        // same frame, but if it isn't supported, performance.now() is fine.
        const start = document.timeline
            ? document.timeline.currentTime
            : performance.now();

        function frame(time) {
            if (signal.aborted) return;
            callback(time);
            scheduleFrame(time);
        }

        function scheduleFrame(time) {
            const elapsed = time - start;
            const roundedElapsed = Math.round(elapsed / ms) * ms;
            const targetNext = start + roundedElapsed + ms;
            const delay = targetNext - performance.now();
            setTimeout(() => requestAnimationFrame(frame), delay);
        }

        scheduleFrame(start);
    }

    // popup open #
    document.addEventListener("DOMContentLoaded", function () {
        let popup = document.getElementById("coutpop");
        let overlay = document.getElementById("popupOverlay");
        let closeBtn = document.getElementById("closePopup");
        let bookButton = document.getElementById("bookbutton"); // Get the button

        // Show the popup and overlay when the page loads
        popup.style.display = "block";
        overlay.style.display = "block";

        // Function to close the popup
        function closePopup() {
            popup.style.display = "none";
            overlay.style.display = "none";
        }

        // Close when clicking the close button (X)
        closeBtn.addEventListener("click", closePopup);

        // Close when clicking anywhere on the overlay
        overlay.addEventListener("click", closePopup);

        // Close when clicking the "Book an Appointment" button
        bookButton.addEventListener("click", closePopup);
    });


</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGR484FT" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>

</html>