<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Privacy Policy</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- ========================= CSS here ========================= -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/styles.default.css') }}">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

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

        @import url('https://fonts.googleapis.com/css2?family=Maven+Pro:wght@600&display=swap');

        .col:hover {
            transform: scale(1.04);
        }

        @media only screen and (max-width: 500px) {
            html {
                overflow-x: hidden;
            }

            .heading {
                margin: 20px;
                margin-top: 25%;
            }

            .bs-callout {
                margin: 20px;
            }

            .copyright {
                bottom: 5% !important;
            }

            .navbar-area {
                background: white !important;
            }
        }

        h4 {
            font-family: 'Gotham Rounded', sans-serif !important;
            font-weight: 300;
            /* padding-bottom: 1%;
            padding-top: 2%; */
        }

        p {
            font-family: 'maven pro', sans-serif;
            /* margin-top: 5px;
            margin-bottom: 5px; */
            font-weight: 100;
            text-align: left;

        }

        footer ul,
        ol {
            list-style-type: none !important;
        }

        nav ul,
        ol {
            list-style-type: none !important;
        }

        ul,
        ol {
            list-style-type: disc;
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

<body>

    <div class="heading">
        <h1
            style="text-align: center; font-weight:500; : 39px; font-family: 'Gotham Rounded', sans-serif !important; margin-top: 10%;">
            Privacy and Cookie Notice
        </h1>
    </div>


    <div class="container ms">
        <div class="bs-callout bs-callout">
            <h4>1.About this Notice
            </h4>
            <p>
                This Privacy and Cookie Notice provides information on how ShaQ Express collects and processes your
                personal data when you visit our website or mobile applications.
            </p>
        </div>

        <div class="bs-callout bs-callout">
            <h4>2.The data we collect about you
            </h4>
            <p>
                We collect your personal data in order to provide and continually improve our products and services.
                We may collect, use, store and transfer the following different kinds of personal data about you:
                Information you provide to us: We receive and store the information you provide to us including your
                identity data, contact data, delivery address and financial data.
            </p>
            <div class="container" style=" margin-top: 1%;">
                <ul class="list-group">
                    <li>
                        <p>A.Information on your use of our website and/or mobile applications: We automatically collect
                            and store certain types of information regarding your use of the ShaQExpress marketplace
                            including information about your searches, views, downloads and purchases.</p>
                    </li>
                    <li>
                        <p>B.Information from third parties and publicly available sources: We may receive information
                            about you from third parties including our carriers; payment service providers;
                            merchants/brands; and advertising service providers.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bs-callout bs-callout">
            <h4>3.Cookies and how we use them
            </h4>
            <p>
                Cookies are used by us occasionally. In their nature Cookies are small text files
                that can be used by a web site to identify/recognize a repeat visitor to the web site.
                Cookies may be used by us for variable reasons, including:
            </p>
            <div class="container">
                <ul class="list-group">
                    <li>
                        <p>Recognising and counting the number of visitors and to see how visitors move around the site
                            when they are using it (this helps us to improve the way our website works, for example by
                            ensuring that users can find what they are looking for).</p>
                    </li>
                    <li>
                        <p>Identifying your preferences and subscriptions e.g. language settings, saved items, items
                            stored in your basket and Prime membership.</p>
                    </li>
                    <li>
                        <p>Sending you newsletters and commercial/advertising messages tailored to your interests.</p>
                    </li>
                    <li>
                        <p>Our approved third parties may also set cookies when you use our marketplace. Third parties
                            include search engines, providers of measurement and analytics services, social media
                            networks and advertising companies.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bs-callout bs-callout">
            <h4>4.How we use your personal data</h4>
            <p>
                We use your personal data to operate, provide, develop and improve the products and services that we
                offer, including the following:
            </p>
            <div class="container">
                <ul class="list-group">
                    <li>
                        <p>Registering you as a new customer</p>
                    </li>
                    <li>
                        <p>Processing and delivering your orders.</p>
                    </li>
                    <li>
                        <p>Managing your relationship with us.</p>
                    </li>
                    <li>
                        <p>Enabling you to participate in promotions, competitions and surveys.</p>
                    </li>
                    <li>
                        <p>Improving our website, applications, products and services</p>
                    </li>
                    <li>
                        <p>Recommending/advertising products or services which may be of interest to you.</p>
                    </li>
                    <li>
                        <p>Complying with our legal obligations, including verifying your identity where necessary.</p>
                    </li>
                    <li>
                        <p>Detecting fraud.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bs-callout bs-callout">
            <h4>5.How we share your personal data</h4>
            <p>
                We may need to share your personal data with third parties for the following purposes:
            </p>
            <div class="container">
                <ul class="list-group">
                    <li>
                        <p>Sale of products and services: In order to deliver your products and services purchased on
                            our marketplace from third parties, we may be required to provide your personal data to such
                            third parties.</p>
                    </li>
                    <li>
                        <p>Working with third party service providers: We engage third parties to perform certain
                            functions on our behalf. Examples include fulfilling orders for products or services,
                            delivering packages, analyzing data, providing marketing assistance, processing payments,
                            transmitting content, assessing and managing credit risk, and providing customer service.
                        </p>
                    </li>
                    <li>
                        <p>Business transfers: As we continue to develop our business, we might sell or buy other
                            businesses or services. In such transactions, customer information may be transferred
                            together with other business assets.
                        </p>
                    </li>
                    <li>
                        <p>Detecting fraud and abuse: We release accounts and other personal data to other companies and
                            organizations for fraud protection and credit risk reduction, and to comply with the law.
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bs-callout bs-callout">
            <h4>When we share your personal data with third parties we:
            </h4>
            <div class="container">
                <ul class="list-group">
                    <li>
                        <p>require them to agree to use your data in accordance with the terms of this Privacy and
                            Cookie Notice, our Privacy Policy and in accordance with the law; and only permit them to
                            process your personal data for specified purposes and in accordance with our instructions.
                            We do not allow our third-party service providers to use your personal data for their own
                            purposes.
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bs-callout bs-callout">
            <h4>6.International transfers</h4>
            <p>
                We may transfer your personal data to locations in another country, if this is permissible pursuant to
                applicable laws in your location. There are inherent risks in such transfers.
                In the event of international transfers of your personal data, we shall put in place measures necessary
                to protect your data, and we shall continue to respect your legal rights pursuant to the terms of this
                Privacy and Cookie Notice and applicable laws in your location.
            </p>
        </div>

        <div class="bs-callout bs-callout">
            <h4>7.Data security
            </h4>
            <p>
                We have put in place appropriate security measures to prevent your personal data from being accidentally
                lost, used or accessed in an unauthorised way, altered or disclosed.
            </p>
            <div class="container">
                <ul class="list-group">
                    <li>
                        <p>In addition, we limit access to your personal data to those employees, agents, contractors
                            and other third parties who have a business need to know. They will only process your
                            personal data on our instructions and they are subject to a duty of confidentiality.</p>
                    </li>
                    <li>
                        <p>We have put in place procedures to deal with any suspected personal data breach and will
                            notify you and any applicable regulator of a breach where we are legally required to do so.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bs-callout bs-callout">
            <h4>8.Your legal rights</h4>
            <p>
                It is important that the personal data we hold about you is accurate and current. Please keep us
                informed if your personal data changes during your relationship with us.</p>
            <div class="container">
                <ul class="list-group">
                    <li>
                        <p>Under certain circumstances, you have rights under data protection laws in relation to your
                            personal data, including the right to access, correct or erase your personal data, object to
                            or restrict processing of your personal data, and unsubscribe from our emails and
                            newsletters.
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bs-callout bs-callout">
            <h4>8.Further details</h4>
            <p>If you are looking for more information on how we process your personal data, or you wish to exercise
                your legal rights in respect of your personal data, please contact <a
                    href="mailto:info@shaqexpress.com">info@shaqexpress.com</a>
            </p>
        </div>

    </div>


    <div class="clearfix" style="width: 100%; height: 50px;"></div>



    <script src="{{ url('assets/js/bootstrap.5.0.0.alpha-2-min.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

@include('layouts.partials.footer')

</html>
