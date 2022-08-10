<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    @media only screen and (max-width: 500px) {

        .logo {
            margin-top: -41px;
            margin-left: 35%;
            margin-bottom: -30% !important;
            padding-top: 7%;

        }

        .social-media {
            margin-top: 36% !important;
        }

        .footer {
            min-height: 40%;
            background: #000000;
            position: relative;
            z-index: 1;
        }

        ul.links {
            /* margin-left: 1%; */
            margin-top: -16px;
        }

        .divider {
            width: 100%;
            border-top: 1px solid rgb(255, 255, 255);
            margin-top: 59px;
            margin-bottom: -15px;

        }
    }

    a {
        color: white;
    }

    .footer a:hover {
        color: #ff0030;
    }

    .footer {
        min-height: 200px;
        background: #000000;
        position: relative;

    }

    @media (max-width: 767px) {
        .footer .footer-widget {
            margin-top: 13%;
            height: 5px !important;
        }

        ul.links {
            margin-left: 14%;
        }



    }
    .fixed-bottom {
    margin: auto;
    height: 100px;
    width: 100%;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}

</style>

<footer id="footer" class=" fixed-bottom footer " style="margin-top: 5% !important; bottom:0 !important;">
    <div class="container">
        <div class="row d-flex content-justify-center">
            <div class=" col-md-4">
                <div class="footer-widget " data-wow-delay=".2s">
                    <div class="logo">
                        <a href="https://www.shaqexpress.com"><img src="{{ url('assets/img/logo/logo-white.png') }}"
                                alt="logo"></a>
                    </div>
                </div>
            </div>

            <div class=" col-md-4">
                <div class="footer-widget " data-wow-delay=".6s">
                    <div>
                        <ul class=" social-media" style="font-size: 30px; letter-spacing: 37px;">
                            <a target="_blank" href="https://www.facebook.com/ShaQexpress/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/ShaQexpress"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.instagram.com/shaq_express/?hl=en"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="https://gh.linkedin.com/company/shaq-express"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCVO8xU2znmOOf-eH84USiaw"><i
                                    class="fa fa-youtube"></i></a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=" col-md-4">
                <div class="divider">
                </div>
                <div class="footer-widget">

                    <ul class="links">
                        <li>
                            <a href="support">Support</a>
                        </li>
                        {{-- <li>
                            <a href="careers">Careers</a>
                        </li> --}}
                        <li>
                            <a href="privacy">Policy</a>
                        </li>
                        <li>
                            <a href="https://partnership.shaqexpress.com" target="_blank">Partner</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- <p class="copyright"> Copyright &copy; 2020-<script>document.write(new Date().getFullYear())</script> ShaQ Express</p> --}}
</footer>
