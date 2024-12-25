@extends('frontend.master_dashboard')
@section('main')
@section('title')
    {{ $breadcat->category_name }} | Fastive Mart - Online Vape Shop - Vape Mods, Kits &amp; E-Liquid
@endsection
<!-- ##############################  Title ##############################  -->
<div class="section-header text-center" style="margin: 0;">
    <h2 class="h2 heading-font"
        style="background-color: #ccc;padding: 3rem 0;font-size: 2rem;font-weight: 600;margin: 0;">
        {{ $breadcat->category_name }}</h2>
</div>
<!--End Title-->


<!-- ##############################  Breadcrumb ##############################  -->
<div class="bredcrumbWrap">
    <div class="container breadcrumbs">
        <a href="{{ url('/') }}" title="Back to the home page">Home</a>
        <b>
            <span aria-hidden="true">›</span>
            <span>{{ $breadcat->category_name }}</span>
        </b>
    </div>
</div>
<!--End Breadcrumb-->



<div class="container new-page">

    <div class="row">

        <!-- ##############################  Sidebar ##############################  -->
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">

            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>


            <div class="sidebar_tags">

                <!--Categories-->
                <div class="sidebar_widget categories filter-widget">
                    <div class="widget-title">
                        <h2>Categories</h2>
                    </div>
                    <div class="widget-content">
                        <ul class="sidebar_categories">
                            @foreach ($categories as $category)
                                <li>
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image">
                                                <a class="grid-view-item__link"
                                                    href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">
                                                    <img class="grid-view-item__image"
                                                        src="{{ asset($category->category_image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="details">
                                                <a class="grid-view-item__title"
                                                    href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">{{ $category->category_name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--Categories-->

                <!--Popular Products-->
                <div class="sidebar_widget">
                    <div class="widget-title">
                        <h2>New Products</h2>
                    </div>
                    <div class="widget-content">
                        <div class="list list-sidebar-products">
                            <div class="grid">

                                @foreach ($newProduct as $product)
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image">
                                                <a class="grid-view-item__link"
                                                    href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">
                                                    <img class="grid-view-item__image"
                                                        src="{{ asset($product->product_thambnail) }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="details">
                                                <a class="grid-view-item__title"
                                                    href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">
                                                    {{ $product->product_name }}
                                                </a>
                                                <div class="grid-view-item__meta">
                                                    @if ($product->discount_price == null)
                                                        <span class="product-price__price">
                                                            <span class="money">BDT
                                                                {{ $product->selling_price }}</span>
                                                        </span>
                                                    @else
                                                        <span class="product-price__price">
                                                            <span class="money">BDT
                                                                {{ $product->discount_price }}</span>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Popular Products-->

            </div>

        </div>
        <!--End Sidebar-->



        <!-- #################### Main Content #################### -->
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col shop-grid-5">

            <div class="productList">

                <!--Toolbar-->
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <div class="row">


                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 custom_menus_submenus">

                                <span style="font-size: 15px;">
                                    We found <strong>{{ count($products) }} items</strong> for you!
                                </span>

                            </div>


                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-right">

                                <div class="filters-toolbar__item">

                                    <label for="SortBy">Sort By</label>

                                    <select name="SortBy" id="SortBy"
                                        class="filters-toolbar__input filters-toolbar__input--sort">

                                        <option value="new_products">New Arrivals</option>

                                        <option value="position" selected="selected">Featured</option>

                                        <option value="price_desc">Price High - Low</option>

                                        <option value="price_asc">Price Low - High</option>

                                    </select>

                                    <input class="collection-header__default-sort" type="hidden" value="manual">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!--End Toolbar-->



                <div class="grid-products grid--view-items">

                    <div class="row">

                        @foreach ($products as $product)
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"
                                        class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset($product->product_thambnail) }}"
                                            src="{{ asset($product->product_thambnail) }}" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="{{ asset($product->product_thambnail) }}"
                                            src="{{ asset($product->product_thambnail) }}" alt="image">
                                        <!-- End hover image -->

                                        @php
                                            $amount = $product->selling_price - $product->discount_price;
                                            $discount = ($amount / $product->selling_price) * 100;
                                        @endphp
                                        <div class="product-labels rectangular">
                                            @if ($product->discount_price == null)
                                                <span class="lbl pr-label1">new</span>
                                            @else
                                                <span class="lbl on-sale">{{ round($discount) }} %</span>
                                            @endif
                                        </div>
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    {{-- <form class="variants add" action="#"
                                            onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To
                                                Cart</button>
                                        </form> --}}
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View"
                                            class="quick-view-popup quick-view" data-toggle="modal"
                                            data-target="#content_quickview" id="{{ $product->id }}"
                                            onclick="productView(this.id)">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->


                                <!--start product details -->
                                <div class="product-details text-center">

                                    <!-- category name -->
                                    <div class="product-name">
                                        <h5 style="font-size: 0.8rem;">{{ $product['category']['category_name'] }}
                                        </h5>
                                    </div>
                                    <!-- End category name -->



                                    <!-- product name -->
                                    <div class="product-name">
                                        <a
                                            href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                    </div>
                                    <!-- End product name -->


                                    <!-- product price -->
                                    @if ($product->discount_price == null)
                                        <div class="product-price">
                                            <span class="price">BDT {{ $product->selling_price }}</span>
                                        </div>
                                    @else
                                        <div class="product-price">
                                            <span class="old-price">BDT {{ $product->selling_price }}</span>
                                            <span class="price">BDT {{ $product->discount_price }}</span>
                                        </div>
                                    @endif
                                    <!-- End product price -->

                                </div>
                                <!-- End product details -->

                            </div>
                        @endforeach

                    </div>

                </div>

            </div>


            <div class="infinitpaginOuter">
                <div class="infinitpagin">
                    <a href="#" class="btn loadMore">Load More</a>
                </div>
            </div>

        </div>
        <!--End Main Content-->

    </div>

</div>
@endsection
