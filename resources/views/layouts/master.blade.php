<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep Osahan">
    <meta name="author" content="Gurdeep Osahan">
    <link rel="icon" type="image/png" href="{{ asset('img/logo white.png') }}">
    <title>ShaQ food - Online food Ordering Made Simple</title>
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
    <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="vendor/sidebar/demo.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FQYRTRMXQQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FQYRTRMXQQ');
</script> </head>
<body class="fixed-bottom-bar">
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.navbar')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="osahan-filter">
                        <div class="filter">
                            <!-- SORT BY -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">SORT BY</h6>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio1f" name="location" class="custom-control-input" checked>
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio1f">Top Rated</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio2f" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio2f">Nearest Me</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio3f" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio3f">Cost High to Low</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio4f" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio4f">Cost Low to High</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio5f" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio5f">Most Popular</label>
                            </div>
                            <!-- Filter -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">FILTER</h6>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck1" checked>
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck1">Open Now</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck2">
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck2">Credit Cards</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck3">
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck3">Alcohol Served</label>
                            </div>
                            <!-- Filter -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">ADDITIONAL FILTERS</h6>
                            </div>
                            <div class="px-3 pt-3">
                                <input type="range" class="custom-range" min="0" max="100" name="minmax">
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="form-group text-right col-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
    <script type="text/javascript" src="js/osahan.js"></script>
</body>
</html>