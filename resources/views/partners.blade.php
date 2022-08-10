<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <title>Partner</title>


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ url('asset3/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ url('asset3/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('asset3/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ url('asset3/bootstrap.min.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-5.0.0-alpha-2.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/styles.default.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ url('asset/css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ url('asset3/images/logo.png') }}">
    <style type="text/css">
        @font-face {
            font-family: "Gotham Rounded";
            src: url('{{ public_path('assets/fonts/GothamRounded-Medium.woff2') }}'),
                url('{{ public_path('assets/fonts/GothamRounded-Medium.woff') }}'),
                url(assets/fonts/GothamRounded-Medium.ttf) format("truetype");
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Gotham Rounded Book";
            src: url('{{ public_path('assets/fonts/GothamRounded-Book.woff2') }}'),
                url(assets/fonts/GothamRounded-Book.woff) format("woff"),
                url(assets/fonts/GothamRounded-Book.ttf) format("truetype");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Maven Pro";
            src: url('{{ public_path('assets/fonts/MavenProRegular.woff2') }}'),
                url(assets/fonts/MavenProRegular.woff) format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .lower-text {
            font-family: 'maven pro', sans-serif;
        }

        .upper-text {
            font-family: 'Gotham Rounded', sans-serif;
        }

        p {
            font-family: 'maven pro', sans-serif;
            text-align: justify;
        }


        @media (max-width: 767px) {
           

            .stepper .step .dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                position: relative;
                z-index: 1;
                display: inline-block;
                background-color: #fff;
                border: 1px solid #d5d5d5;
                top: -1%;
            }

            .stepper .step:after {
                content: "";
                width: 100%;
                height: 1px;
                position: absolute;
                top: 24px !important;
                background-color: #d5d5d5;
                z-index: 0;
            }

            .card-body {
                margin-left: 10% !important;
            }

            .process {
                margin-left: 2% !important;
            }

            .before-footer.bg-gray {
                margin-left: 20% !important;
            }

            .col.signup {
                margin-left: 20% !important;
            }

            .process {
                margin-left: 20%;
            }

            .container.how {
                margin-left: 10% !important;
            }

        }

        p.testimonial-text {
            text-align: center;

        }

    </style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FQYRTRMXQQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FQYRTRMXQQ');
</script> </head>
@include('layouts.partials.header')

<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    <div id="form-header" class="form-header"
        style="background: url('asset3/images/header-background.png') center center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <form style="background: white; padding: 44px; border-radius: 29px;">
                            <h1 class="h1-large" style="color: rgb(0, 0, 0); font-size: 40px;">Sell with ShaQ
                                Express</h1>
                            <p class="p-large" style="color: black; font-size: 24px; line-height: 31px;">We need
                                your details to get you onboard</p>
                            <div class="line-1" style="  height: 5px;
                        background: black; margin-bottom: 20px;"></div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" placeholder="Business Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control-input" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control-input" name="selectbox" required>
                                    <option value="Accra">Select your City</option>
                                    <option value="Accra">Accra</option>
                                    <option value="Tema">Tema</option>
                                    <option value="Madina">Madina</option>
                                    <option value="Haatso">Haatso</option>
                                    <option value="Ashongma">Ashognma</option>
                                    <option value="Agbogba">Agbogba</option>
                                    <option value="Lakeside">Lakeside</option>
                                    <option value="Dome">Dome</option>
                                    <option value="Achimota">Achimota</option>
                                    <option value="Lapaz">Lapaz</option>
                                    <option value="Spintex">Spintex</option>
                                    <option value="Teshie">Teshie</option>
                                    <option value="Nungua">Nungua</option>
                                    <option value="Labadi">Labadi</option>
                                    <option value="Osu">Osu</option>
                                    <option value="East Legon">East Legon</option>
                                    <option value="Adenta">Adenta</option>
                                    <option value="Ashaiman">Ashaiman</option>
                                    <option value="Dansoma">Dansoma</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="address" class="form-control-input" placeholder="Location" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control-input" name="selectbox" name="selectbox">
                                    <option value="" selected disabled>Select your Business Type</option>
                                    <option value="Restaurant">Restaurant</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="Shop">Shop</option>
                                    <option value="Takoradi">Super Market</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <input type="number" class="form-control-input" placeholder="Number of Staff" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="" class="cards-1 bg-gray">
        <div class="container" style="">
            <h2 style="color: black; text-align: center;">Benefit of working with ShaQ Express</h2>
            <div class="d-flex p-3 justify-content-center">
                    <div class="col-md-2">
                        <div class="card-icon mb-0 ">
                            <span class="fas fa-industry"></span>
                        </div>
                        <strong class="mb-4" class="" style="letter-spacing: normal !important;">Grow your brand</strong>
                            
                    </div>
                    <div class="col-md-2">
                        <div class="card-icon mb-0 red">
                            <span class="fas fa-comment-dollar"></span>
                        </div>
                         <strong class="mb-4">Increase sales and profits
                            </strong>
                            
                    </div>

                    <div class="col-md-2">
                        <div class="card-icon mb-0 green">
                            <span class="fas fa-truck"></span>
                        </div>
                            <strong class="mb-4">Get your orders delivered within 30 minutes</strong>
                            
                    </div>
                    <div class="col-md-2">
                        <div class="card-icon mb-0 green">
                            <span class="fas fa-user-plus"></span>
                        </div>
                            <strong class="mb-4">Free sign up for your store</strong>
                    </div>
                    <div class="col-md-2">
                        <div class="card-icon mb-0 training">
                            <span class="fas fa-chalkboard-teacher"></span>
                        </div>
                        <strong class="mb-4">Free training</strong>
                    </div>
            </div>
        </div>
    </div>


    <section class="process pt-5 pb-5">
            <h2 class="" style="color: rgb(18, 33, 56); text-align:center;">Registration Process</h2>
            <ul class="stepper">

                <li class="step active">
                    <span class="upper-text">Register
                    </span>
                    <span class="dot"></span>
                    <span class="lower-text">
                        Fill the registration form <br>and submit required documents.

                    </span>
                </li>

                <li class="step active">
                    <span class="upper-text"> Activate your account
                    </span>
                    <span class="dot"></span>
                    <span class="lower-text">
                        A ShaQ Express agent will call <br>you to assist you create an account.
                    </span>
                </li>
                <li class="step active">
                    <span class="upper-text">Training
                    </span>
                    <span class="dot"></span>
                    <span class="lower-text">
                        The agent will give you hands-on <br>training on how to sell on the ecommerce app
                    </span>
                </li>

                <li class="step active">
                    <span class="upper-text">Increase Sales:</span>
                    <span class="dot"></span>
                    <span class="lower-text">
                        Enjoy millions of visitors.

                    </span>
                </li>
            </ul>
    </section>
    <div class="cards-2 bg-gray pt-2 mb-n5" style="bottom:0 !important;">
        <h2 class="h2-headin" style="color: rgb(31, 11, 66); padding-bottom: 2.5%; text-align:center;">How it works </h2>
            <div class="row">
                <div class="d-flex p-3 justify-content-center">

                    <!-- Card -->
                    <div class="card m-1">
                        <img class="quotes" src="asset3/images/order-food.svg" alt="alternative">
                        <div class="card-body">
                            <div class="testimonial-author">Step one</div>
                            <p class="testimonial-text">Customer places order on the ShaQ e-commerce app
                            </p>
                            <div class="occupation"></div>
                        </div>
                        <div class="gradient-floor red-to-blue"></div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card m-1">
                        <img class="quotes" src="asset3/images/chef.svg" alt="alternative">
                        <div class="card-body">
                            <div class="testimonial-author">Step-Two</div>
                            <p class="testimonial-text">You accept and prepare the customer's order</p>

                            <div class="occupation"></div>
                        </div>
                        <div class="gradient-floor blue-to-purple"></div>
                    </div>

                    <div class="card m-1">
                        <img class="quotes" src="asset3/images/delivery-man.svg" alt="alternative">
                        <div class="card-body">
                            <div class="testimonial-author">Step-Three</div>
                            <p class="testimonial-text">ShaQ rider picks up order and delivers to the customer.
                            </p>

                            <div class="occupation"></div>
                        </div>
                        <div class="gradient-floor red-to-blue"></div>
                    </div>
                    <!-- end of card -->


                </div> <!-- end of col -->
            </div> <!-- end of row -->
    </div>
    </div> <!-- end of cards-2 -->
    <!-- end of testimonials -->
   

    <script src="asset3/js/bootstrap.min.js"></script>
    <script src="asset3/js/scripts.js"></script>
    <script src="assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>



    <script src="asset/js/main.js"></script>
    @include('layouts.partials.footer')
</body>

</html>
