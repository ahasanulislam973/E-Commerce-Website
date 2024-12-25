@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Search Results | Festive Mart
@endsection

<div class="section logo-section custom_mobile_category_slider" style="background: #f0f0f0; margin-top: 3rem;">
    <div class="container">
        <div class="row">
            <div class="col-7 col-sm-7 col-md-6 col-lg-6">
                <div class="section-header">
                    <h2 class="h2 heading-font custom_font"><b>Search Results for "{{ $query }}"</b></h2>
                </div>
            </div>
            <div class="col-5 col-sm-5 col-md-6 col-lg-6 text-right">
                <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>

        <div class="row">
            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="logo-bar">
                    @if($products->isEmpty())
                        <p>No products found.</p>
                    @else
                        @foreach ($products as $product)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"
                                        class="grid-view-item__link">
                                        <img class="primary blur-up lazyload"
                                            data-src="{{ asset($product->product_thambnail) }}"
                                            src="{{ asset($product->product_thambnail) }}" alt="image" title="product">
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

                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view"
                                            data-toggle="modal" data-target="#content_quickview" id="{{ $product->id }}"
                                            onclick="productView(this.id)">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="text-center product-details">
                                    <div class="product-name">
                                        <h5 style="font-size: 0.8rem;">{{ $product['category']['category_name'] }}</h5>
                                    </div>
                                    <div class="product-name">
                                        <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                    </div>
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
                                </div>
                                <!-- End product details -->
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
