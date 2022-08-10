<header class="header">
    <div class="navbar-area" style="background: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="{{ url('assets/img/logo/logo.png') }}" width="50%" height="50%" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="" href="/">Home</a>
                                </li>
                                <li class="nav-item dropbtn">
                                    <!-- <a class="page-scroll" href="#about">About</a> -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            About
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="about">ShaQ Express</a>
                                            <a class="dropdown-item" href="team-shaq">Team ShaQ</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scrol" href="#">Courier</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scrol" href="https://food.shaqexpress.com" target="_blank">Order for food</a>
                                </li>

                                {{-- <li class="nav-item">
                                    <a class="page-scroll" href="#delivery">Delivery</a>
                                </li> --}}
                                <li class="nav-item dropbtn">
                                    <!-- <a class="page-scroll" href="#about">About</a> -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Partners
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="https://partnership.shaqexpress.com"  target="_blank">Become a vendor</a>
                                            <a class="dropdown-item" href="Partner-Rider">Signup as a rider</a>
                                        </div>
                                    </div>
                                </li>

                                {{-- <li class="nav-item">
						<a href="partners"> Partner</a>
                   </li> --}}
                            </ul>
                        </div>
                        <!-- navbar collapse -->
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- navbar area -->
</header>
