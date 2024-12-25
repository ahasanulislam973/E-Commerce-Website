@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Home | Festive Mart
@endsection

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
<div class="slideshow slideshow-wrapper pb-section">

    <!-- ############################## Banner Slider ############################## -->
    @include('frontend.home.home_slider')

</div>

<!--############################## Small ccategory One ############################## -->
@include('frontend.home.category')
<!--End Small ccategory One-->

<!-- ############################## Small Banner One ############################## -->
@include('frontend.home.home_banner')
<!--End Small Banner One-->
@include('frontend.home.home_featuredProducts')
<!--Product Slider (featured)-->
<!-- ############################## Product Slider (New Arrivals) ############################## -->
@include('frontend.home.home_new_arrivals')
<!--End Product Slider (New Arrivals)-->
<!-- ############################## Product Slider (Trending) ############################## -->
@include('frontend.home.home_trending')
<!--Product Slider (featured)-->
<!-- ############################## Product Slider (Bestsellers) ############################## -->
@include('frontend.home.home_best_sellers')
<!--End Product Slider (Bestsellers)-->

@include('frontend.home.home_featured_brands')
<!--End Small ccategory One-->






<!--Store Information-->
<div class="section store-information" style="margin-top:20px;">
    <div class="container-fluid">
        <div class="row">
            <ul class="display-table store-info ">
                <li class="display-table-cell" style="border-bottom:none; width:50%;"> <i class="anm anm-truck-l" aria-hidden="true"></i>
                    <h5>Free Shipping For All</h5>
                    <span class="sub-text">
                        Free shipping on all BD order
                    </span>
                </li>
                <li class="display-table-cell" style="border-bottom:none; width:50%;"> <i class="anm anm-phone-l" aria-hidden="true"></i>
                    <h5>Online Support 24/7</h5>
                    <span class="sub-text">
                        Support online 24 hours a day
                    </span>
                </li>
                
                <li class="display-table-cell" style="border-bottom:none; width:50%;"> <i class="anm anm-money-bill-ar" aria-hidden="true"></i>
                    <h5>Money Return</h5>
                    <span class="sub-text">
                        Back guarantee under 7 days
                    </span>
                </li>
                <li class="display-table-cell" style="border-bottom:none; width:50%;"> <i class="anm anm-gift-l" aria-hidden="true"></i>
                    <h5>Member Discount</h5>
                    <span class="sub-text">
                        On every order over $100.00
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--End Store Information-->




@endsection
