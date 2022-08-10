<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<style>
    h2 {
        text-align: center;
        padding: 20px;
    }

    /* Slider */

    .slick-slide {
        opacity: 0.1;
        margin: 0px 20px;
    }

    .slick-slide:hover {
        opacity: 1.1;
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 120px;
        min-height: 1%;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    @media (max-width: 667px) {
        .slick-slide {
            opacity: 1.1;
            margin: 0px 20px;
        }
    }

</style>

<div class="container mb-5 mt-5" style="">
    <h2 class="mt-5">Our Partners</h2>
    <section class="customer-logos slider">
        <div class="slide"><img src="{{ url('assets/img/delivery/partners/doughman.png') }}" alt="Dough Man"></div>
        <div class="slide"><img src="{{ url('assets/img/delivery/partners/miss-ghana.jpg') }}" alt="Miss Ghana"></div>
        <div class="slide"><img src="{{ url('assets/img/delivery/partners/papas.png') }}" alt="papas"></div>
        <div class="slide"><img src="{{ url('assets/img/delivery/partners/aramix.png') }}" alt="Aramix"></div>
       
    </section>

</div>
<script>
    $(document).ready(function() {
        $('.customer-logos').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 757,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
</script>
