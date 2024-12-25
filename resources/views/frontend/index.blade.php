@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Home | Festive Mart
@endsection
<!--Home slider-->
<div class="slideshow slideshow-wrapper pb-section">

    <!-- ############################## Banner Slider ############################## -->
    @include('frontend.home.home_slider')

</div>
<!--End Banner Slider-->
<style>
    .custom_font {
        font-weight: 700 !important;
        font-size: 32px !important;
        margin-right: 30px !important;
    }@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Home | Festive Mart
@endsection
<!--Home slider-->
<div class="slideshow slideshow-wrapper pb-section">

    <!-- ############################## Banner Slider ############################## -->
    @include('frontend.home.home_slider')

</div>
<!--End Banner Slider-->
<style>
    .custom_font {
        font-weight: 700 !important;
        font-size: 32px !important;
        margin-right: 30px !important;
    }

    @media only screen and (max-width: 600px) {
        .custom_font {
            font-size: 24px !important;
        }
    }
</style>

<!-- ############################## Small ccategory One ############################## -->
<!--@include('frontend.home.category')-->
<!--End Small ccategory One-->

<!-- ############################## Small Banner One ############################## -->
<!--@include('frontend.home.home_banner')-->
<!--End Small Banner One-->
<!-- ############################## Product Slider (Trending) ############################## -->
<!--@include('frontend.home.home_featuredProducts')-->
<!--Product Slider (featured)-->

<!-- ############################## Product Slider (New Arrivals) ############################## -->
<!--@include('frontend.home.home_new_arrivals')-->
<!--End Product Slider (New Arrivals)-->

<!-- ############################## Product Slider (Trending) ############################## -->
<!--@include('frontend.home.home_trending')-->
<!--Product Slider (featured)-->




<!-- ############################## Product Slider (Bestsellers) ############################## -->
<!--@include('frontend.home.home_best_sellers')-->
<!--End Product Slider (Bestsellers)-->




<!-- ############################## Google Map ############################## -->
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14604.30397127131!2d90.41188798037123!3d23.780308103192546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c71ce580cc5b%3A0x628f58a3f261f98f!2sUnico%20IT%20Limited!5e0!3m2!1sen!2sbd!4v1690453446761!5m2!1sen!2sbd"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
<!--End Google Map-->


</style>

@endsection
