@extends('welcome')

@section('css_before')
<link rel="stylesheet" href="{{asset('/public/css/style-bsi-zakian.css?v=1.4')}}">
<link rel="stylesheet" href="{{asset('public/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('public/css/slick-theme.css')}}">
<link href="{{ asset('public/css/lity.css') }}" rel="stylesheet">
<style>
         .bg-black{
      background: #000000;
    }
    .coverNews{
      position: relative;          
     
    }
  
    .coverNews .control-button{

      position: absolute;
      z-index: 2;    
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);

    }

    .coverNews .cover-img.cover-video {
      width: 100%;
      /* height: 100%; */
      object-fit: contain;
    }

    .coverNews .play-btn{
      width: 75px !important;
      height: 75px !important;
    }

    .contentOtherNews img{
        width: 100%;
    }
    .mr-4{
      margin-right: 15px;
    }

    .coverNews .bg-black{
        border-radius: 1rem;
    }
    
</style>
@endsection

@section('content')
<!-- section1 -->
<section class="bgsection">
    <div id="carouselExampleControls" class="carousel slide carouselDesktop" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($slider as $key => $image)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <a href="{{$image->url_link}}">
                    <img src="{{asset('/public/img/home/'.$image->slider_dt)}}" class="d-block w-100" alt="">
                </a>
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="carouselExampleControls" class="carousel slide carouselMobile" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($slider as $key => $image)
            <div class="carousel-item active">
                <img src="{{asset('/public/img/home/'.$image->slider_mb)}}" class="d-block w-100" alt="">
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- section2 -->
@include('home.section.sectionCardList')

<!-- section3 -->
@include('home.section.tablePriceGold')

<!-- section4 -->
@include('home.section.graphicPriceGold')

<!-- section5 -->
@include('home.section.describeProduct')

<!-- section6 -->
@include('home.section.newsBSI')

@endsection

@section('js_after')
<script src="{{asset('public/js/slick.min.js')}}" charset="utf-8"></script>
<script src="{{asset('public/js/lity.min.js')}}"></script>

<script type="text/javascript">
    $('.product-slide').slick({
        arrows: false,
        dots: false,
        //  infinite: false,
        autoplay: false,
        autoplaySpeed: 3000,
        // slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 480,
            settings: {
                arrows: false,
                // slidesToShow: 1,
                slidesToScroll: 1,
                // centerMode: true,
            }
        }]
    });
</script>

@endsection