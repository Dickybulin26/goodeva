@extends('layouts.app-frontend')

@section('title', 'About')
{{-- Meta Section --}}

@section('meta_desc')
We are Goodeva ninja. Sejak tahun 2013, Goodeva telah berjuang mengembangkan product digital Ai & iOT di Indonesia
@endsection

@section('meta_key')
Goodeva technology, goodeva software, goodeva, good evaluation, IT & digital solutions, jasa pembuatan aplikasi andorid, jasa pembuatan aplikasi ios, jasa pembuatan aplikasi website, smart safety, jasa penghubung api, perusahaan IT bekasi, perusahaan it jakarta
@endsection

@section('meta_auth')
goodeva
@endsection

{{-- End Meta Section --}}

@section('css_after')

<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="{{asset('public/css/materialize.min.css')}}">

<link rel="stylesheet" href="{{asset('public/css/slick.css')}}">

<link rel="stylesheet" href="{{asset('public/css/slick-theme.css')}}">



<style>

    html{
        scroll-behavior: smooth;
    }

    body {
        background-color: #F5F5F5;
    }

    .mb-12{
        margin-bottom: 12rem !important;
    }

    @media screen and (min-width: 1350px) and (max-width: 1500px) {
        .bg--journey {
            min-height: 2070px;
        }
    }

    .text-competency{
        padding-left: 6rem !important;
    }

    body, span, p, h1, h2, h3, h4, h5, h6 {

        font-family: 'Inter',sans-serif !important;

    }

    .lh-24{
        line-height: 24px !important;
    }

    
    .mt-100-{
        margin-top:-100px;
    }

    .gallery-img{
        height:250px;
        object-fit: cover;
    }
    
    .competency-comp{
             margin-top: -5.5% !important; 
            border-top-left-radius: 70px;
            border-top-right-radius: 70px;
            box-shadow: -5px -6px 20px 0px rgba(0,0,0,0.33);;
            -webkit-box-shadow: -5px -6px 20px 0px rgba(0,0,0,0.33);;
            -moz-box-shadow: -5px -6px 20px 0px rgba(0,0,0,0.33);;
        }


    .text-active {

        font-weight: 600 !important;

        font-size: 18px !important;

        color: #ffffff !important;

        opacity: 1 !important;

        }



        .text-non-active {

        font-weight: 400;

        font-family: 'Inter', sans-serif;

        color: #ffffff;

        opacity: 0.84;

        font-size: 18px;

        letter-spacing: 0.08px !important;

        }



        .text-active .bg--point-circle-compt {

        width: 8%;

        font-size: 12px;

        background: -webkit-linear-gradient(180deg, #FFC784 0%, #FFA200 100%) 0% 0% no-repeat padding-box;

        -webkit-background-clip: text;

        -webkit-text-fill-color: transparent;

        }


        .aslide-area .slid-content img {

        height: 175px;

        object-fit: cover;

        }

      
       


        .aslide-area .slick-dots li.slick-active button:before {

        opacity: 1;

        color: white;

        }



        .aslide-area .slick-dots li button:before {

        font-size: 9px;

        top: -35px;

        color: white;

        }

        
    .aslide-ceo-area .slid-content img {

        height: 175px;

        object-fit: cover;

        }



        .aslide-ceo-area .slick-dots li.slick-active button:before {

        opacity: 1;

        color: #63A6B3;

        }

        .aslide-ceo-area .slick-dots li button:before {

        font-size: 9px;

        top: 15px;

        color: #133A7221;

        }

        .aslide-ceo-area .slick-track{
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .aslide-ceo-area .slick-dots{
            position: relative;
            bottom: none;
        }



        .aslide-area .slid-content,.aslide-ceo-area .slid-content {

        position: relative;

        }
        


        .section-heading .heading-text p {

            font-weight: 300;

            font-size: 18px;

            line-height: 26px;

            letter-spacing: 0.4px;

        }

        .bg-greyeb {
            background-color: #EBEBEB;
        }

        .pt-170px{
            padding-top: 170px !important;
        }


    @media (max-width:767px)
    {
        .section-heading .heading-text p > strong {

        font-weight: 600 !important;

        }

        .col-xs-12{
            width: 100% !important;
        }

        .gallery-img{
            width: 100%;
            height:250px;
            object-fit: cover;
        }
    }

    @media(min-width:625px) and (max-width:767px){
        .mt-50-{
            margin-top: -15%;
        }

        .visi-misi--title{
            margin-top: 5%;
        }
    }
    @media(min-width:570px) and (max-width:624px){
        .mt-50-{
            margin-top: -20%;
        }
    }
    @media(min-width:460px) and (max-width:570px){
        .mt-50-{
            margin-top: -25%;
        }

        .visi-misi--title{
            margin-top: 5%;
        }
    }

    @media(min-width:420px) and (max-width:460px){
        .mt-50-{
            margin-top: -35%;
        }

        
    }

    



    .section-heading .heading-text p > strong {

        font-weight: 400;

    }



    .text--count p {

        color: #2B2A35B8;

        font-weight: 400;

    }



    .title--journey p {

        font-size: 36px;

        color: #fff;

        font-weight: 300;

        line-height: 48px;

    }

    

    .title--journey p > strong {

        font-weight: 600;

    }



    .deskripsi--journey p {

        font-size: 18px;

        line-height: 26px;

        letter-spacing: 0.07px;

        opacity: 0.89;
    }



    .timeline-area .milestone .year button {

        font-size: 17px;

        font-weight: 700;

        padding: 0 25px;

    }



    .timeline-area .milestone .story {

        font-size: 18px;

        font-weight: 350 !important;

        letter-spacing: 0.3px;

    }



    .visi-misi--title p {

        color: #133a72;

        font-size: 32px;

        font-weight: 400;

    }


    .visi-misi--title p > strong {

        font-weight: 700;

    }



    .visi-misi--desc {

        font-size: 18px !important;

        font-weight: 300 !important;

        line-height: 26px !important;

        letter-spacing: 0.08px !important;

        

    }

    .text-white{
        color: #ffffff !important;
    }



    .bg--point-circle-compt {

        font-size: 12px;

        color: #636F73;

    }



    .bg--point-circle {

        width: 8%;

        font-size: 9px;

    }



    .bg--visi--point {

        width: 8%;

        font-size: 12px;

        background: -webkit-linear-gradient(#4AB5C9, #3E8391);

        -webkit-background-clip: text;

        -webkit-text-fill-color: transparent;

    }

    

    .bg--misi--point {

        width: 73%;

        font-size: 12px;

        background: -webkit-linear-gradient(#4AB5C9, #3E8391);

        -webkit-background-clip: text;

        -webkit-text-fill-color: transparent;

    }



    .block-leader p {

        color: #2B2A35;

        font-weight: 400;

        font-size: 19px !important;

    }



    .name-leader {

        font-size: 26px;

        display: block;

        margin-top: -6px;

    }



    .btn-load {

        border-radius: 8px;

        font-size: 14px;

        padding: 0 40px;

    }



    .btn-load:hover, .btn-load:focus {

        background: #182d4b;

        color: #fff;

    }



    .btn--gabung {

        font-size: 15px;

        font-family: 'Inter', sans-serif;

        padding: 0 21px;

    }




    #img-competency,#img-competency-mobile {

        margin-left: 27%;

    }



    .btn-lihat-lowongan {

        background: transparent linear-gradient(0deg, #E08417 0%, #FFBB00 100%) 0% 0% no-repeat padding-box;

        border-radius: 8px;

        padding: 0 23px;

    }

    

    .btn-lihat-lowongan:hover {

        background: transparent linear-gradient(0deg, #d1770c 0%, #FFBB00 100%) 0% 0% no-repeat padding-box;

    }

    

    .btn-lihat-lowongan > span {

        color: #143477;

        font-family: 'Open Sans' !important;

        font-size: 14.5px;

        font-weight: 600;

    }



    .bg--rekrut p {

        font-size: 18px;

    }



    .text-value {

        color: #133A72;

        font-size: 18px;

        letter-spacing: 0.08px;

        font-weight: 500;

    }



    #img-competency,#img-competency-mobile {

        /* height: 347px; */

        height: 280px;

        object-fit: contain;

    }

    .bg--journey {
            min-height: 1850px;
    }

    @media screen and (-webkit-min-device-pixel-ratio:0) {
        /* .timeline-area .milestone.s3 {

        top: 264px;

        right: 489px;

        left: -75px;

        } */

        .timeline-area .milestone.s4 {
            top: 609px;
            right: 164px;
        }
    }

    

    @media (min-width:767px){
            .title--journey p {
                margin-bottom: 20px !important;
            }

           
        }    

    /* Zoom 150% */

    @media screen and (min-width: 1000px) and (max-width: 1098px) { 

        .bg--rekrut {

            min-height: 290px;
            padding-top : .5rem !important;

        }



        .deskripsi--journey p {

            font-size: 12px;

        }


        .journey--area{
            padding-top:100px;
        }

        #img-competency,#img-competency-mobile {

            margin-left: 6%;

        }



        .text-non-active .text-active {

            font-size: 12.1px;

        }



        .text-value {

            font-size: 14px;

        }



        .timeline-area .milestone.s1 img, .timeline-area .milestone.s2 img, .timeline-area .milestone.s3 img, .timeline-area .milestone.s4 img, .timeline-area .milestone.s5 img {

            width: 72%;

        }



        .timeline-area .milestone .story {

            font-size: 13px;

            margin-left: -26px;

        }



        .timeline-area .milestone .year button {

            font-size: 14px;

            padding: 0px 23px;

            margin-left: -62px;

        }



        .timeline-area .milestone.s1 {
            top: -213px;
            left: 109px;
        }



        .timeline-area .milestone.s2 {

            top: -193px;

            right: 145px;

        }



        .timeline-area .milestone.s3 {

            top: 371px;

            left: -35px !important;

            /* left:  auto; */

        }



        .timeline-area .milestone.s4 {
            top: 609px;
            right: 164px;
        }

        


        .timeline-area .milestone.s5 {
            top: 660px;
            left: 212px;
        }

        .bg--journey{
            min-height: 1820px !important;
        }

        .angka--about{
            font-size: 18px;
        }

        .title--journey p{
            margin-bottom: 0 !important;
        }

        .title--journey{
            margin-bottom: 0 !important;
        }

        .pt-170px{
            padding-top:140px !important;
        }

    }



    /* Zoom 125% */

    @media screen and (min-width: 1098px) and (max-width: 1300px) { 

        #img-competency,#img-competency-mobile {

            margin-left: 6%;

        }



        .bg--rekrut {

            min-height: 350px;

        }



        .timeline-area .milestone.s1 {

            top: -200px;

            left: 136px;

        }

        .journey--area{
            padding-top: 51px;
        }


        .timeline-area .milestone.s2 {

            top: -274px;

            right: 227px;

        }

        .timeline-area .milestone.s2{
            top: -219px;
            right: 227px;

        }

        .angka--about{
            font-size: 18px;
        }



        .timeline-area .milestone.s3 {

            top: 240px;

            left: -66px;

        }



        .timeline-area .milestone.s4 {

        top: 630px;

        right: 248px;

        }



        .timeline-area .milestone.s5{
            top: 604px;
           left: 183px;
        
        }

    }



    /* Zoom 110% */

    @media screen and (min-width: 1300px) and (max-width: 1410px) { 

        #img-competency,#img-competency-mobile {

            margin-left: 19%;

        }



        .timeline-area .milestone.s1 {

            top: -200px;

            right: 250px;

        }



        /* .timeline-area .milestone.s2 {

            top: -197px;

            right: 302px;

        } */



        .timeline-area .milestone.s3 {

            top: 331px;

            /* right: 489px; */

            left: -66px;

        }

        .timeline-area .milestone.s4 {

        top: 630px;

        right: 248px;

        }

        .timeline-area .milestone.s5 {

            top: 674px;

            left: 199px;

        }

    }

    @media(min-width:1100px) and (max-width:1999px){
        .text-value{
            font-size: 16px;
        }

        .visi-misi--desc{
            font-size: 16px !important;
        }
    }

    @media (min-width:1000px) and (max-width:1100px){
        .visi-misi--desc{
            font-size: 16px !important;
        }
    }
   

    @media (max-width:1025px)
        {   
            .col-w-67{
                width: 66.66666667%;
            }

            .col-w-33{
                width: 33.33333333%;
            }

            .col-w-50{
                width: 50%;
            }

            .timeline-area{
                height: 710px !important;
            }
            .bg--journey{
                height: 1305px !important;
                min-height: 0 !important;
                margin-top:5%;
            }

            .pb-5rem{
                padding-bottom:5rem !important;
            }
        }

        @media (min-width:1000px) and (max-width:1024px){
            .bg--journey{
                height: 2025px !important;
                min-height: 0 !important;
                margin-top:-110px;
            }

            /* .competency-comp{
                margin-top:-7.5% !important;
            } */

            .deskripsi--journey p{
                font-size: 16px;
            }

            .visi-misi--desc{
                font-size: 16px !important;
            }

            .title--journey{
                margin-top: 5rem !important;
            }


            .timeline-area .milestone.s1 {
                top: -221px;
                left: 96px;
            }
        }

        @media (min-width:767px) and (max-width:1000px){
            .col-w-67{
                width: 66.66666667%;
            }
            

            .col-w-33{
                width: 33.33333333%;
            }

            .angka--about{
                font-size: 20px;
            }

            .col-sm-7{
                width: 58.333333333% !important;
            }

            .col-sm-5{
                width: 41.66666667% !important;
            }

            .bg--journey{
                height: 2025px !important;
                min-height: 0 !important;
                margin-top:-110px;;
            }

            .title--journey{
                margin-top: 5rem !important;
            }

            .timeline-area{
                margin-top:130px;
            }

            /* .competency-comp{
                margin-top: -9.5% !important;
            } */

            .deskripsi--journey p{
                font-size: 15px;
            }

            .section-heading .heading-text p{
                font-size: 15px;
            }

            .timeline-area .milestone{
                width: 210px;
            }

            .timeline-area .milestone.s1 {
                top: -19px;
                left: 0px;
            }


            .timeline-area .milestone.s2 {
                top: -60px;
                right: 145px;
            }



            .timeline-area .milestone.s3 {
                top: 435px;
                left: -35px !important;
                /* left: auto; */
            }



            .timeline-area .milestone.s4 {
                top: 718px;
                right: 168px;
            }

            .timeline-area .milestone.s5 {
                top: 801px;
                left: 172px;
            }

            .visi-misi--title p{
                font-size: 30px
            }

            .text-competency{
                padding-left: 30px !important;
            }

            .visi-misi--desc{
                font-size: 16px !important;
            }

            .text-non-active,.text-active{
                font-size: 16px;
            }

            .text-value{
                font-size: 16px;
            }

            .bg--misi--point {
            width: 120%;
            font-size: 11px;
            }

            .img-leader{
                height: 120px;
            }

            .name-leader{
                font-size: 20px;
            }

            .block-leader p{
                font-size: 16px !important;
            }

            .bg--rekrut{
                background-size: auto;
            }

        }

        @media (max-width:767px)
        {

            .visi-misi--title{
                font-size:28px !important;
                letter-spacing: 0.03px;
            }

            .visi-misi--desc{
                font-size: 16px !important;
            }

            .visi-misi--title p{
                font-size: 28px !important;
                letter-spacing: 0.03px;
            }


            .title--journey p{
                font-size:28px !important;
                letter-spacing: 0.03px;
                line-height: 45px;
            }

            .section-heading .heading-text p{
                font-size:16px;
            }

            .deskripsi--journey p {
                font-size:16px;
            }

            #aslide-ceo-area .slick-list.draggable{
                padding: 0 100px 0 0 !important;
            }

            #aslide-area .slick-list.draggable{
                padding: 0 62px 0 0 !important;
            }

            .mx-0-mobile{
                margin-left: 1rem !important;
                margin-right: 0 !important;
            }

            .timeline-area{
                height: auto !important;
            }

            .text-non-active,.text-active{
                font-size: 16px !important
            }
            
            .text-value {
                font-size: 16px;

            }

            .bg--misi--point{
                font-size:8px !important;
            }

            .competency-comp{
                /* margin-top: -5.5% !important; */
                border-top-left-radius: 26px !important;
                border-top-right-radius: 26px !important;
              
            }

        }

        @media (max-width:361px){

            .visi-misi--title p{
                font-size:24px !important;
            }

            .deskripsi--journey p{
                font-size: 12px !important;
            }

            .title--journey p{
                font-size: 24px !important;
            }

            .section-heading .heading-text p{
                font-size:13px;
            }

        }

       

       

        .bg-navy{
            background: #072857;
        }

       
        .judul-journey{
            margin-top: 10rem !important;
        }

        .mt-120px{
            margin-top: 120px;
        }

       
        .journey--area{
            padding-top:-5px;
        }
    
    

        
</style>

@endsection



@section('js_after')

<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>

    function animateValue(obj, start, end, duration,tipe) {

    let startTimestamp = null;

        const step = (timestamp) => {

            if (!startTimestamp) startTimestamp = timestamp;

            const progress = Math.min((timestamp - startTimestamp) / duration, 1);

            if(tipe == 'plus')

            {

                obj.innerHTML = Math.floor(progress * (end - start) + start)+'+';

            }

            else

            {

                obj.innerHTML = Math.floor(progress * (end - start) + start);

            }



            if (progress < 1) {

            window.requestAnimationFrame(step);

            }

        };

        window.requestAnimationFrame(step);

    }



    const founded = document.getElementById("founded");

    const customer = document.getElementById("customer");

    const project_handled = document.getElementById("project_handled");

    const product = document.getElementById("product");

    const founded_mobile = document.getElementById("founded-mobile");

    const customer_mobile = document.getElementById("customer-mobile");

    const project_handled_mobile = document.getElementById("project_handled-mobile");

    const product_mobile = document.getElementById("product-mobile");

    animateValue(founded, 0, 2015, 10,'no');

    animateValue(customer, 0, 2018, 10,'no');

    animateValue(project_handled, 0, 250, 1200,'plus');

    animateValue(product, 0, 4, 10,'no');

    animateValue(founded_mobile, 0, 2015, 10,'no');

    animateValue(customer_mobile, 0, 2018, 10,'no');

    animateValue(project_handled_mobile, 0, 250, 1200,'plus');

    animateValue(product_mobile, 0, 4, 10,'no');

</script>



<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

<script src="{{asset('public/js/slick.min.js')}}" charset="utf-8"></script>



    <script type="text/javascript">

        $("#load_more").click(function(){
            $.ajax({
                url:"{{ url('load-img-ninja') }}",
                beforeSend:function(){
                    $(".spinner").show();
                },
                success:function(result){
                    $(".spinner").hide();
                    $("#konten").html(result.data);
                    $("#load_more").hide();
                }
          });

        });

        $('#aslide-area').slick({

            dots: false,

            infinite: true,

            adaptiveHeight: true,

            //   slidesToShow: 3,

            //   slidesToScroll: 1,

            autoplay: true,

            autoplaySpeed: 4000,

            arrows: false,

            pauseOnHover: false,

            pauseOnFocus: false,

            responsive: [

                {

                        breakpoint: 480,

                        settings: {

                            arrows: false,

                            centerMode : true,

                            centerPadding: '40px',


                        }

                }

            ]

        });

        $('#aslide-ceo-area').slick({

            dots: true,

            infinite: true,

            // adaptiveHeight: true,

            //   slidesToShow: 3,

            //   slidesToScroll: 1,

            autoplay: true,

            autoplaySpeed: 4000,

            arrows: false,

            pauseOnHover: false,

            pauseOnFocus: false,

            responsive: [

                {

                        breakpoint: 480,

                        settings: {

                            arrows: false,

                            centerMode : true,

                            centerPadding: '40px',


                        }

                }

            ]

            });

    
    </script>


<script>

    $("#list-competency").on('mouseover', '.btn--transparent',function(e) {

        $el = $('#img-competency');

        $el_m = $('#img-competency-mobile');

        if($(this).hasClass('text-active')) 
        {

        }
        else
        {

            $('.btn--transparent').removeClass('text-active');

            $el.addClass('img-out-compt');

            $el_m.addClass('img-out-compt');

            $(this).addClass('text-active');

            $('.btn--transparent').addClass('text-non-active');



            $('.bg--point-circle-compt').removeClass('active');

            i = $(this).find('i');

            i.addClass('active');

            img = $(this).data("img");

            setTimeout(function () {

                $el.removeClass('img-out-compt');

                $el.addClass('img-out-compt');

                $el.attr('src', img);

                $el.removeClass('img-out-compt');

                $el.addClass('img-in-compt');

                $e_m.removeClass('img-out-compt');

                $e_m.addClass('img-out-compt');

                $e_m.attr('src', img);

                $e_m.removeClass('img-out-compt');

                $e_m.addClass('img-in-compt');



            }, 400);

        }

    })



    $(document).ready(function(){



        var x = -1;

        var images = ['compt-1', 'compt-2', 'compt-3', 'compt-4','compt-5'];

        function changeImage() {



        var $el = $('#img-competency');

        var $el_m = $('#img-competency-mobile');

        x++;

        $('.btn--transparent').removeClass('text-active');

        $('.btn--transparent').addClass('text-non-active');

        $el.addClass('img-out-compt');

        $el_m.addClass('img-out-compt');

        $('.'+images[x]).addClass('text-active');



        $('.bg--point-circle-compt').removeClass('active');

        i = $('.'+images[x]).find('i');

        i.addClass('active');

        img = $('.'+images[x]).data("img");

        console.log(x);

        setTimeout(function () {

            $el.removeClass('img-out-compt');

            $el.addClass('img-out-compt');

            $el.attr('src', img);

            $el.removeClass('img-out-compt');

            $el.addClass('img-in-compt');

            $el_m.removeClass('img-out-compt');

            $el_m.addClass('img-out-compt');

            $el_m.attr('src', img);

            $el_m.removeClass('img-out-compt');

            $el_m.addClass('img-in-compt');



        }, 400);



        n = parseInt(images.length-1);

        x = x % n;

        }



        changeImage();

        setInterval(changeImage, 8000); // Interval



    })



    $(".timeline-area").on('mouseenter', '.milestone',function(e) {



        s = $(this).find('.story');

        // y = $(this).find('.year');

        s.addClass('active');

        // y.addClass('active');

    }),$(".timeline-area").on('mouseleave', '.milestone',function(e) {

        s = $(this).find('.story');

        // y = $(this).find('.year');

        s.removeClass('active');

        // y.removeClass('active');

    })

</script>

@endsection



@section('content')

<!-- Section comment -->
<section class="section-comments pb-5 mb-3 pb-sm-2 mb-sm-0  desktop-show" style="padding-top: 135px;" >

    <div class="container">

        <div class="row">

            <div class="col-md-10" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">

                <div class="section-heading mb-2">

                    <div class="heading-title font-w400 fs--36">

                        We are <span class="color--signature font-w600">Goodeva</span>  Ninja.

                    </div>

                    <div class="heading-text">

                        <p>

                            Memiliki arti filosofis yaitu merupakan sambungan kata yang membentuk sebuah makna <strong> GOOD-EVALUATION (GOOD-EVA)</strong>. Nilai filosofi yang mendalam ini menjadikan <strong>GOOD EVALUATION </strong> menjadi nilai utama yang selalu kami jalankan. untuk menciptakan layanan yang berkualitas dan team yang solid.

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="row mt-4">

            <div class="col-md-7 col-sm-7 col-w-67 ">

                <div class="section-heading mb-0">

                    <img src="{{ asset('public/img/assets/about/about-goodeva-1.png') }}" alt="" class="b-radius10px">

                </div>

            </div>

            <div class="col-md-5 col-sm-5 col-w-33 text--count">

                <div class="row">

                    <div class="col-md-5 col-sm-6 col-w-50">

                        <div class="angka--about" id="founded">0</div>

                        <p>Founded</p>

                    </div>

                    <div class="col-md-5 col-sm-6 col-w-50">

                        <div class="angka--about" id="customer">0</div>

                        <p>Established</p>

                    </div>

                    <div class="col-md-5 col-sm-6 col-w-50">

                        <div class="angka--about" id="project_handled">0</div>

                        <p>Project Handled</p>

                    </div>

                    <div class="col-md-5 col-sm-6 col-w-50">

                        <div class="angka--about" id="product">0</div>

                        <p>Product</p>

                    </div>

                </div>

                <div class="row">

                    <div class="section-heading mb-0">

                        <img src="{{ asset('public/img/assets/about/about-goodeva-2.png') }}" alt="" class="b-radius10px">

                    </div>

                </div>

            </div>

        </div>

    </div>

</section><!--./section comment -->

<section class="section-comments pb-0 mobile-show" style="padding-top: 135px;">

    <div class="container">

        <div class="row mx-0">

            <div class="col-md-10">

                <div class="section-heading mb-2">

                    <div class="heading-title font-w400 fs--36 mb-4 lh-24">

                        We are <br> <br><span class="color--signature font-w600">Goodeva</span>  Ninja.

                    </div>

                    <div class="heading-text">

                        <p>

                            Memiliki arti filosofis yaitu merupakan sambungan kata yang membentuk sebuah makna <strong> GOOD-EVALUATION (GOOD-EVA)</strong>. <br> Nilai filosofi yang mendalam ini menjadikan <strong>GOOD EVALUATION </strong> menjadi nilai utama yang selalu kami jalankan. untuk menciptakan layanan yang berkualitas dan team yang solid.

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="row mt-4">

            {{-- <div class="col-md-7">

                <div class="section-heading mb-0">

                    <img src="{{ asset('public/img/assets/about/Foto About.png') }}" alt="">

                </div>

            </div> --}}

            <div class="col-md-5 col-xs-12 col-sm-12 text--count">

                <div class="row mx-3">

                    <div class="col-md-5 col-xs-6">

                        <div class="angka--about" id="founded-mobile">0</div>

                        <p>Founded</p>

                    </div>

                    <div class="col-md-5 col-xs-6">

                        <div class="angka--about" id="customer-mobile">0</div>

                        <p>Established</p>

                    </div>

                    <div class="col-md-5 col-xs-6 mt-4">

                        <div class="angka--about" id="project_handled-mobile">0</div>

                        <p>Project Handled</p>

                    </div>

                    <div class="col-md-5 col-xs-6 mt-4">

                        <div class="angka--about" id="product-mobile">0</div>

                        <p>Product</p>

                    </div>

                </div>

             

            </div>

        </div>

    </div>

    {{-- <div class="row mx-0 mb-100-"> --}}
    <div class="row mx-0 mb-5">

        <div class="section-heading mt-5 mb-0 aslide-area" id="aslide-area">

            <div class="slid-content mx-3">

                <img src="{{ asset('public/img/assets/about/about-goodeva-1.png') }}" alt="" class="b-radius10px">

            </div>

            <div class="slid-content mx-3">

                <img src="{{ asset('public/img/assets/about/about-goodeva-2.png') }}" alt="" class="b-radius10px">

            </div>

        </div>

    </div>

</section><!--./section comment -->

<!-- Section comment -->

 <section class="bg-journey desktop-show  ">

    <section class="section-comments about-goodeva-container bg-journey bg--journey mt-100- pt-0 pt-170px">

        <div class="row mx-0">

            <div class="col-md-12 text-center pb-5">

                <div class="title--journey mb-3 px-5">

                    <p><strong> Company </strong> Journey</p>

                    

                </div>

                <div class="deskripsi--journey px-4">

                    <p class="desktop-show">

                        Sejak tahun 2015, Goodeva telah berjuang mengembangkan product digital Ai & iOT di Indonesia. <br> Ikuti perjalanan Goodeva sebagai bagian dari sejarah technology Indonesia.

                    </p>


                </div>

            </div>

            <div class="col-md-12 journey--area">

                <div class="image-area">

                    <div class="timeline-area">

                        <div class="col-md-6 col-sm-6">

                            <div class="milestone s1">

                                <img src="{{ url('public/img/assets/about/Journey 1-goodeva.png') }}" class="img-journey" alt="proses 1">
    
                                <div class="year">
    
                                    <button class="btn">2015</button>
    
                                </div>
    
                                <div class="story">
    
                                    Berawal dari ide rumahan lahirlah Gagoo technology
    
                                </div>
    
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6">

                            <div class="milestone s2">

                                <img src="{{ url('public/img/assets/about/Journey 2-goodeva.png') }}" class="img-journey" alt="proses 2">
    
                                <div class="year">
    
                                    <button class="btn">2016</button>
    
                                </div>
    
                                <div class="story">
    
                                    Gagoo technolgy berubah nama menjadi Goodeva technology
    
                                </div>
    
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6"></div>

                        <div class="col-md-6 col-sm-6">

                            <div class="milestone s3">

                                <img src="{{ url('public/img/assets/about/Journey 3-goodeva.png') }}" class="img-journey" alt="proses 3">
    
                                <div class="year">
    
                                    <button class="btn">2017</button>
    
                                </div>
    
                                <div class="story">
    
                                    Goodeva bekerja sama dengan globaldeva goslar germany
    
                                </div>
    
                            </div>


                        </div>
                        
                        <div class="col-md-6 col-sm-6">


                            <div class="milestone s4">

                                <img src="{{ url('public/img/assets/about/Journey 4-goodeva.png') }}" class="img-journey" alt="proses 4">
    
                                <div class="year">
    
                                    <button class="btn">2018</button>
    
                                </div>
    
                                <div class="story">
    
                                    Meluncurkan beberapa produk digital inovatif khusus segmen B2B
    
                                </div>
    
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6">

                            <div class="milestone s5">

                                <img src="{{ url('public/img/assets/about/Journey 5-goodeva.png') }}" class="img-journey" alt="proses 5">

                                <div class="year">

                                    <button class="btn">NOW</button>

                                </div>

                                <div class="story">

                                    Product iOT & Ai goodeva telah dipakai hampir diseluruh provinsi di Indonesia

                                </div>

                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </section><!--./section comment -->

</section>

<section class="bg-journey mobile-show ">

    <section class="section-comments about-goodeva-container bg-journey pt-0" >

        <div class="row mx-0">

            <div class="col-md-12 text-center pt-3 pb-3 mt-5">

                <div class="title--journey mb-0 mt-3 pt-5 px-5">

                    <p class="mb-0"><strong> Company </strong> Journey</p>

                    

                </div>

                <div class="deskripsi--journey px-0 py-2">

                    <p>

                        Sejak tahun 2015, Goodeva telah berjuang mengembangkan product digital Ai & iOT di Indonesia. Ikuti perjalanan Goodeva sebagai bagian dari sejarah technology Indonesia.

                    </p>

                </div>

            </div>

            <div class="col-md-12 mb-12 text-center">

                <div class="image-area mb-5">

                    <div class="timeline-area row mx-0 mb-5">

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey 1-goodeva.png') }}" class="img-journey" alt="proses 1">

                            <div class="year">

                                <button class="btn">2015</button>

                            </div>

                            <div class="story mx-auto active">

                                Berawal dari ide rumahan lahirlah Gagoo technology

                            </div>

                        </div>

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey Path 1.svg') }}" class="img-journey" alt="proses 1">

                        </div>

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey 2-goodeva.png') }}" class="img-journey" alt="proses 2">

                            <div class="year">

                                <button class="btn">2016</button>

                            </div>

                            <div class="story mx-auto active">

                                Gagoo technolgy berubah nama menjadi Goodeva technology

                            </div>

                        </div>

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey Path 1.svg') }}" class="img-journey" alt="proses 1">

                        </div>

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey 3-goodeva.png') }}" class="img-journey" alt="proses 3">

                            <div class="year">

                                <button class="btn">2017</button>

                            </div>

                            <div class="story mx-auto active">

                                Goodeva bekerja sama dengan globaldeva goslar germany

                            </div>

                        </div>

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey Path 1.svg') }}" class="img-journey" alt="proses 1">

                        </div>

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey 4-goodeva.png') }}" class="img-journey" alt="proses 4">

                            <div class="year">

                                <button class="btn">2018</button>

                            </div>

                            <div class="story mx-auto active">

                                Meluncurkan beberapa produk digital inovatif khusus segmen B2B

                            </div>

                        </div>

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey Path 1.svg') }}" class="img-journey" alt="proses 1">

                        </div>

                        <div class="milestone col-xs-12 mt-4">

                            <img src="{{ url('public/img/assets/about/Journey 5-goodeva.png') }}" class="img-journey" alt="proses 5">

                            <div class="year">

                                <button class="btn">NOW</button>

                            </div>

                            <div class="story mx-auto active">

                                Product iOT & Ai goodeva telah dipakai hampir diseluruh provinsi di Indonesia

                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </section><!--./section comment -->

</section> 



<section class="section-comments bg-navy competency-comp py-5 desktop-show" style="overflow: hidden;">

    {{-- <div class="container"> --}}

        <div class="row mx-0">



            <div class="col-md-6 col-sm-6 text-competency">

                <div class="row my-5">

                    <div class="col-md-12">

                        <div class="visi-misi--title">

                            <p class="text-white"><strong>Company</strong> Competency</p>

                        </div>

                        <p class="visi-misi--desc text-white">

                            GOOD EVALUATION menjadi nilai utama yang selalu kami jalankan. untuk menciptakan layanan yang berkualitas dan team yang solid.

                        </p>

                    </div>

                    <div class="col-md-10">

                        <div class="row mx-3 my-3" id="list-competency">

                            <div class="col-md-12 p-2 list--compt"><button class="btn--transparent compt-1 text-active text-non-active" data-img="{{ asset('public/img/assets/about/about-goodeva-1.png') }}"><i class="fa fa-circle bg--point-circle-compt active"></i> Available Customized</button></div>

                            <div class="col-md-12 p-2 list--compt"><button class="btn--transparent compt-2 text-active text-non-active" data-img="{{ asset('public/img/assets/about/Timeline transparant@2x.png') }}"><i class="fa fa-circle bg--point-circle-compt"></i> Transparant Project Timeline</button></div>

                            <div class="col-md-12 p-2 list--compt"><button class="btn--transparent compt-3 text-active text-non-active" data-img="{{ asset('public/img/assets/about/Fast & On Time@2x.png') }}"><i class="fa fa-circle bg--point-circle-compt"></i> Fast & On Time</button></div>

                            <div class="col-md-12 p-2 list--compt"><button class="btn--transparent compt-4 text-active text-non-active" data-img="{{ asset('public/img/assets/about/On Budget Price@2x.png') }}"><i class="fa fa-circle bg--point-circle-compt"></i> On Budget Price</button></div>

                            <div class="col-md-12 p-2 list--compt"><button class="btn--transparent compt-5" data-img="{{ asset('public/img/assets/about/Has a team@2x.png') }}"><i class="fa fa-circle bg--point-circle-compt"></i> First hand & has a team</button></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-6 col-sm-6 text-competency">

                <div class="row my-5">

                    <div class="col-md-12">

                        <img src="{{ asset('public/img/assets/about/about-goodeva-1.png') }}" alt="" id="img-competency" class="b-radius10px ml-2">

                    </div>

                </div>

            </div>

        </div>

    {{-- </div> --}}

</section><!--./section comment -->

<section class="section-comments bg-navy py-5  competency-comp mobile-show">

    {{-- <div class="container"> --}}

        <div class="row mx-0">

            <div class="col-md-6 col-xs-12 mt-50- hidden">

                <div class="row mx-0">

                    <div class="col-md-12 text-center">

                        <img src="{{ asset('public/img/assets/about/about-goodeva-1.png') }}" alt="" class="mx-0" id="img-competency-mobile">

                    </div>

                </div>

            </div>

            <div class="col-md-6 col-xs-12">

                <div class="row mx-0">

                    <div class="col-md-12">

                        <div class="visi-misi--title">

                            <p class="text-white"><strong>Company</strong> Competency</p>

                        </div>

                        <p class="visi-misi--desc text-white">

                            GOOD EVALUATION menjadi nilai utama yang selalu kami jalankan. untuk menciptakan layanan yang berkualitas dan team yang solid.

                        </p>

                    </div>

                    <div class="col-md-8">

                        <div class="row mx-0 my-3" id="list-competency">

                            <div class="col-md-12 py-2 px-0 list--compt"><button class="btn--transparent compt-1 text-active text-non-active" data-img="{{ asset('public/img/assets/about/about-goodeva-1.png') }}"><i class="fa fa-circle bg--point-circle-compt active"></i> Available Customized</button></div>

                            <div class="col-md-12 py-2 px-0 list--compt"><button class="btn--transparent compt-2 text-active text-non-active" data-img="{{ asset('public/img/assets/about/Timeline transparant@2x.png') }}"><i class="fa fa-circle bg--point-circle-compt"></i> Transparant Project Timeline</button></div>

                            <div class="col-md-12 py-2 px-0 list--compt"><button class="btn--transparent compt-3 text-active text-non-active" data-img="{{ asset('public/img/assets/about/Fast & On Time@2x.png') }}"><i class="fa fa-circle bg--point-circle-compt"></i> Fast & On Time</button></div>

                            <div class="col-md-12 py-2 px-0 list--compt"><button class="btn--transparent compt-4 text-active text-non-active" data-img="{{ asset('public/img/assets/about/On Budget Price@2x.png') }}"><i class="fa fa-circle bg--point-circle-compt"></i> On Budget Price</button></div>

                            <div class="col-md-12 py-2 px-0 list--compt"><button class="btn--transparent compt-5" data-img="{{ asset('public/img/assets/about/Has a team@2x.png') }}"><i class="fa fa-circle bg--point-circle-compt"></i> First hand & has a team</button></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    {{-- </div> --}}

</section><!--./section comment -->



<section class="section-comments bg--visi-misi desktop-show pt-5 pb-0">

    <div class="row mx-0 ">

        <div class="col-md-4 col-sm-4">

            <img src="{{ asset('public/img/assets/about/add-value-goodeva.png') }}" alt="">

        </div>

        <div class="col-md-8 col-sm-8">

            <div class="row my-5">

                <div class="col-md-5 col-sm-6 pl-0">

                    <div class="visi-misi--title">

                        <p><strong>Added</strong> Value</p>

                        

                    </div>

                    <p class="visi-misi--desc">

                        Kami bertumbuh karena selalu melakukan evaluasi yang baik pada semua aspek pekerjaan yang telah kami lakukan guna terus melakukan perbaikan & inovasi

                    </p>

                </div>

                <div class="col-md-6 col-sm-6">

                    <div class="visi-misi--title vis--hidden">

                        Added Value

                    </div>

                    <div class="row">

                        <div class="col-md-6 col-sm-12 p-2 text-value"><i class="fa fa-circle bg--point-circle bg--visi--point"></i> <span>Free Consulting</span></div>

                        <div class="col-md-6 col-sm-12 p-2 text-value"><i class="fa fa-circle bg--point-circle bg--visi--point"></i> <span>Lifetime Guarantee</span></div>

                        <div class="col-md-6 col-sm-12 p-2 text-value"><i class="fa fa-circle bg--point-circle bg--visi--point"></i> <span>Fully Maintenance</span></div>

                        <div class="col-md-6 col-sm-12 p-2 text-value"><i class="fa fa-circle bg--point-circle bg--visi--point"></i> <span>Daily Support</span></div>

                    </div>

                </div>

            </div>

            <div class="row my-5">

                <div class="col-md-5 col-sm-5 pl-0">

                    <div class="visi-misi--title">

                        <p><strong>Visi</strong></p> 

                    </div>

                    <p class="visi-misi--desc">

                        Menciptakan Inovasi Platform Digital Safety & Kesehatan Untuk Masa Depan Kesehatan di Indonesia yang lebih baik dengan memperdayakan karya anak bangsa

                    </p>

                </div>

                <div class="col-md-7 col-sm-7">

                    <div class="visi-misi--title">

                        <p><strong>Misi</strong></p> 

                    </div>

                    <div class="px-3">

                        <div class="row">

                            <div class="offset-col-md-1 col-md-1 offset-col-sm-1 col-sm-1 p-2 text--blue font-w500"><i class="fa fa-circle bg--point-circle mr-2 bg--misi--point"></i></div>

                            <div class="col-md-10 col-sm-10 misi--point py-2 px-0 visi-misi--desc">Membangun budaya perusahaan dan mindset team untuk bekerja cepat, inovatif, optimis dan evaluatif.</div>

                        </div>

                        <div class="row">

                            <div class="offset-col-md-1 col-md-1 offset-col-sm-1 col-sm-1 p-2 text--blue font-w500"><i class="fa fa-circle bg--point-circle mr-2 bg--misi--point"></i></div>

                            <div class="col-md-10 col-sm-10 misi--point py-2 px-0 visi-misi--desc">Menciptakan produk yang powerful dan mudah digunakan.</div>

                        </div>

                        <div class="row">

                            <div class="offset-col-md-1 col-md-1 offset-col-sm-1 col-sm-1 p-2 text--blue font-w500"><i class="fa fa-circle bg--point-circle mr-2 bg--misi--point"></i></div>

                            <div class="col-md-10 col-sm-10 misi--point py-2 px-0 visi-misi--desc">Kreatif, cepat tanggap, selalu tepat waktu dan bekerja sesuai dengan timeline</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



</section><!--./section comment -->


<section class="section-comments bg--visi-misi mobile-show pb-0">

    <div class="row mx-0 my-5">

        <div class="col-md-7">

            <div class="row mx-0">

                <div class="col-md-5 col-xs-12 mb-5">

                    <div class="visi-misi--title">

                        <p><strong>Visi</strong></p> 

                    </div>

                    <p class="visi-misi--desc">

                        Menciptakan Inovasi Platform Digital Safety & Kesehatan Untuk Masa Depan Kesehatan di Indonesia yang lebih baik dengan memperdayakan karya anak bangsa

                    </p>

                </div>

                <div class="col-md-7 col-xs-12">

                    <div class="visi-misi--title">

                        <p><strong>Misi</strong></p> 

                    </div>

                    <div class="px-2">

                        <div class="row">

                            <div class="offset-col-md-1 col-md-1 p-2 text--blue font-w500 col-xs-1"><i class="fa fa-circle bg--point-circle mr-2 bg--misi--point"></i></div>

                            <div class="col-md-10 misi--point py-2 px-0 visi-misi--desc col-xs-11">Membangun budaya perusahaan dan mindset team untuk bekerja cepat, inovatif, optimis dan evaluatif.</div>

                        </div>

                        <div class="row">

                            <div class="offset-col-md-1 col-md-1 p-2 text--blue font-w500 col-xs-1"><i class="fa fa-circle bg--point-circle mr-2 bg--misi--point"></i></div>

                            <div class="col-md-10 misi--point py-2 px-0 visi-misi--desc col-xs-11">Menciptakan produk yang powerful dan mudah digunakan.</div>

                        </div>

                        <div class="row">

                            <div class="offset-col-md-1 col-md-1 p-2 text--blue font-w500 col-xs-1"><i class="fa fa-circle bg--point-circle mr-2 bg--misi--point"></i></div>

                            <div class="col-md-10 misi--point py-2 px-0 visi-misi--desc col-xs-11">Kreatif, cepat tanggap, selalu tepat waktu dan bekerja sesuai dengan timeline</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



</section><!--./section comment -->



<section class="section-comments bg-greyeb pb-0 pt-0 desktop-show">

    <div class="container">

        <div class="row my-5">

            <div class="col-md-10">

                <div class="section-heading mb-2">

                    {{-- <div class="heading-title text--blue font-w600 fs--36">

                        Leadership Team

                    </div> --}}

                    <div class="visi-misi--title">

                        <p class="mb-0"><strong>Leadership Team</strong></p> 

                    </div>

                </div>

            </div>

        </div>

        <div class="row my-5">

            <div class="col-md-4 col-sm-4">

                <div class="block-leader b-radius10px">

                    <div class="row mx-0">

                        <div class="col-md-12 img-lead">

                            <img src="{{ url('public/img/assets/about/agustinus puta pristya-goodeva-ceo.png') }}" class="img-leader" alt="">

                        </div>

                    </div>

                    <div class="row mx-0 leader-desk">

                        <div class="col-md-12 pt-3 pb-4 px-3">

                            <p class="mb-0">CEO</p>

                            <span class="name-leader">Agustinus Putra</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-sm-4">

                <div class="block-leader b-radius10px">

                    <div class="row mx-0">

                        <div class="col-md-12 img-lead">

                            <img src="{{ url('public/img/assets/about/antonius priyono-goodeva-advisor.png') }}" class="img-leader" alt="">

                        </div>

                    </div>

                    <div class="row mx-0 leader-desk">

                        <div class="col-md-12 pt-3 pb-4 px-3">

                            <p class="mb-0">Crop. Advisor</p>

                            <span class="name-leader">Antonius Priyono</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-sm-4">

                <div class="block-leader b-radius10px">

                    <div class="row mx-0">

                        <div class="col-md-12 img-lead">

                            <img src="{{ url('public/img/assets/about/brian adi kusumo-goodeva-cto.png') }}" class="img-leader" alt="">

                        </div>

                    </div>

                    <div class="row mx-0 leader-desk">

                        <div class="col-md-12 pt-3 pb-4 px-3">

                            <p class="mb-0">CTO</p>

                            <span class="name-leader">Brian Adi Kusumo</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section><!--./section comment -->

<section class="section-comments bg-greyeb pb-0 pt-0 mobile-show">

    <div class="">

        <div class="row mt-0 mx-0">

            <div class="col-md-10">

                <div class="section-heading mb-2 mt-5">

                    {{-- <div class="heading-title text--blue font-w600 fs--36">

                        Leadership Team

                    </div> --}}

                    <div class="visi-misi--title">

                        <p class="mb-0 px-3"><strong>Leadership Team</strong></p> 

                    </div>

                </div>

            </div>

        </div>

        <div class="row  mx-0">

            <div class="section-heading mt-2 mb-0 aslide-ceo-area" id="aslide-ceo-area">

                <div class="slid-content">

                    <div class="block-leader mx-3 mx-0-mobile b-radius10px">

                        <div class="row mx-0">
    
                            <div class="col-md-12 img-lead">
    
                                <img src="{{ url('public/img/assets/about/agustinus puta pristya-goodeva-ceo.png') }}" class="img-leader" alt="">
    
                            </div>
    
                        </div>
    
                        <div class="row mx-0 leader-desk">
    
                            <div class="col-md-12 pt-3 pb-4 px-3">
    
                                <p class="mb-2">CEO</p>
    
                                <span class="name-leader">Agustinus Putra</span>
    
                            </div>
    
                        </div>
    
                    </div>

                </div>

                <div class="slid-content">

                    <div class="block-leader mx-3 mx-0-mobile b-radius10px">

                        <div class="row mx-0">
    
                            <div class="col-md-12 img-lead">
    
                                <img src="{{ url('public/img/assets/about/antonius priyono-goodeva-advisor.png') }}" class="img-leader" alt="">
    
                            </div>
    
                        </div>
    
                        <div class="row mx-0 leader-desk">
    
                            <div class="col-md-12 pt-3 pb-4 px-3">
    
                                <p class="mb-2">Crop. Advisor</p>
    
                                <span class="name-leader">Antonius Priyono</span>
    
                            </div>
    
                        </div>
    
                    </div>

                </div>

                <div class="slid-content">

                    <div class="block-leader mx-3 mx-0-mobile b-radius10px">

                        <div class="row mx-0">
    
                            <div class="col-md-12 img-lead">
    
                                <img src="{{ url('public/img/assets/about/brian adi kusumo-goodeva-cto.png') }}" class="img-leader" alt="">
    
                            </div>
    
                        </div>
    
                        <div class="row mx-0 leader-desk">
    
                            <div class="col-md-12 pt-3 pb-4 px-3">
    
                                <p class="mb-2">CTO</p>
    
                                <span class="name-leader">Brian Adi Kusumo</span>
    
                            </div>
    
                        </div>
    
                    </div>

                </div>

            </div>


        </div>

    </div>

</section><!--./section comment -->



<section class="section-comments bg-greyeb pb-0 pt-0">

    <div class="container">

        <div class="row">

            <div class="col-md-10 mt-5">

                <div class="section-heading mb-2">

                    {{-- <div class="heading-title text--blue font-w600 fs--36">

                        Goodeva Ninja Team

                    </div> --}}

                    <div class="visi-misi--title">

                        <p class="mb-0 px-3"><strong>Goodeva Ninja Team</strong></p> 

                    </div>

                </div>

            </div>

        </div>

        <div class="row my-5">

            <div class="col-md-12 pl-0">

                <div class="">

                    <div class="row mx-0">

                        <div class="col-md-12 col-xs-12">

                            <img src="{{ asset('public/img/assets/about/about-goodeva-ninja.png') }}"  alt="" class="desktop-show">

                            <img src="{{ asset('public/img/assets/about/about-goodeva-ninja-mobile.png') }}"  alt="" class="mobile-show">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section><!--./section comment -->



<section class="section-comments pb-0 pt-0">

    <div class="container">

        <div id="konten">

            <div class="row mt-5">

             

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="{{ asset('public/img/assets/about/gallery/goodeva-gallery-1.jpg') }}"  alt="Gallery Goodeva" class="gallery-img b-radius10px">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="{{ asset('public/img/assets/about/gallery/goodeva-gallery-2.jpg') }}"  alt="Gallery Goodeva" class="gallery-img b-radius10px">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="{{ asset('public/img/assets/about/gallery/goodeva-gallery-9.jpg') }}"  alt="Gallery Goodeva" class="gallery-img b-radius10px">

                </div>

        </div>

        <div class="row mb-5">

                   <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="{{ asset('public/img/assets/about/goodeva-gallery-1.png') }}"  alt="Gallery Goodeva" class="gallery-img b-radius10px">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="{{ asset('public/img/assets/about/goodeva-gallery-2.png') }}"  alt="Gallery Goodeva" class="gallery-img b-radius10px">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="{{ asset('public/img/assets/about/goodeva-gallery-3.png') }}"  alt="Gallery Goodeva" class="gallery-img b-radius10px">

                </div>

            </div>

        </div>

        

        <div class="spinner row" style="display:none">

            <div class="col-md-12 text-center">
                <img id="img-spinner" src="{{ asset('public/img/assets/dark-loader.gif') }}" width="40px" height="40px">
            </div>
        </div>

        <div class="row my-5">

            <div class="col-md-12 text-center">

                <button class="btn btn-load" id="load_more">

                    Load More

                </button>

            </div>

        </div>

    </div>

</section><!--./section comment -->



<section class="section-comments bg--rekrut desktop-show pt-5 pb-0">

    <div class="container my-5">

        <div class="row mt-4 mb-3">

            <div class="col-md-12 text-center">

                <div class="title--rekrut">Ingin bergabung bersama kami?</div>

                <p>yuk lihat lowongan yang tersedia di goodeva technology</p>

            </div>

        </div>

        <div class="row mb-4">

            <div class="col-md-12 text-center">

                <a href="{{ url('contact')}}" class="btn btn-lihat-lowongan">

                    <span>Lihat Lowongan</span>

                </a>

                {{-- <button class="btn btn--gabung">

                    Lihat Lowongan

                </button> --}}

            </div>

        </div>

    </div>

</section><!--./section comment -->


<section class="section-comments bg--rekrut-mobile mobile-show pt-5">

    <div class="container my-5">

        <div class="row mt-4 mx-0">

            <div class="col-md-12 text-center">

                <div class="title--rekrut">Ingin bergabung bersama kami?</div>

                <p>yuk lihat lowongan yang tersedia di goodeva technology</p>

            </div>

        </div>

        <div class="row mb-4 mx-0">

            <div class="col-md-12 text-center">

                <a href="{{ url('contact')}}" class="btn btn-lihat-lowongan">

                    <span>Lihat Lowongan</span>

                </a>

                {{-- <button class="btn btn--gabung">

                    Lihat Lowongan

                </button> --}}

            </div>

        </div>

    </div>

</section><!--./section comment -->





@endsection


