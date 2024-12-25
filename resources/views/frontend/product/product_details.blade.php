@extends('frontend.master_dashboard')
@section('main')

@section('title')
    {{ $product->product_name }} | Fastive Mart - Online Vape Shop - Vape Mods, Kits &amp; E-Liquid
@endsection

<!--MainContent-->
<div id="MainContent" class="main-content" role="main">

    <div id="ProductSection-product-template" class="product-template__container prstyle2 container">

        <!--#ProductSection-product-template-->
        <div class="product-single product-single-1">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="product-details-img product-single__photos bottom">

                        <div class="zoompro-wrap product-zoom-right pl-20">

                            {{-- <div class="zoompro-span">
                                    <img class="blur-up lazyload zoompro"
                                        data-zoom-image="{{ asset('frontend/assets/images/demoProduct/demoProduct_image_1.png') }}"
                                        alt=""
                                        src="{{ asset('frontend/assets/images/demoProduct/demoProduct_image_1.png') }}" />
                                </div> --}}


                            <div class="zoompro-span">
                                <img class="blur-up lazyload zoompro"
                                    data-zoom-image="{{ asset($product->product_thambnail) }}" alt=""
                                    src="{{ asset($product->product_thambnail) }}" />
                            </div>


                        </div>


                        <div class="product-thumb product-thumb-1">

                            <div id="gallery" class="product-dec-slider-1 product-tab-left">

                                @foreach ($multiImage as $img)
                                    <a data-image="{{ asset($img->photo_name) }}"
                                        data-zoom-image="{{ asset($img->photo_name) }}" class="slick-slide slick-cloned"
                                        data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                        <img class="blur-up lazyload" src="{{ asset($img->photo_name) }}"
                                            alt="" />
                                    </a>
                                @endforeach


                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="product-single__meta">

                        <h1 class="product-single__title" id="dpname">{{ $product->product_name }}</h1>


                        <div class="prInfoRow">

                            <div class="product-stock">
                                @if ($product->product_qty > 0)
                                    <span class="instock"
                                        style="color: #fff;padding: 5px 10px; border-radius: 5px;background-color: green;">
                                        <b>In Stock</b>
                                    </span>
                                @else
                                    <span class="outstock"
                                        style="color: #fff;padding: 5px 10px; border-radius: 5px;background-color: red;">
                                        <b>Stock Out</b>
                                    </span>
                                @endif
                            </div>

                            <div class="product-sku">
                                <span style="font-weight: 700">SKU:</span>
                                <span class="variant-sku">{{ $product->product_code }}</span>
                            </div>

                            <div class="product-sku">
                                <span style="font-weight: 700">Stock:</span>
                                <span class="variant-sku">({{ $product->product_qty }}) Items In Stock</span>
                            </div>

                        </div>


                        <p class="product-single__price product-single__price-product-template">

                            @php
                                $amount = $product->selling_price - $product->discount_price;
                                $discount = ($amount / $product->selling_price) * 100;
                            @endphp


                            @if ($product->discount_price == null)
                                <span
                                    class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                    <span id="ProductPrice-product-template">
                                        <span class="money">BDT {{ $product->selling_price }}</span>
                                    </span>
                                </span>
                            @else
                                <span class="visually-hidden">Regular price</span>
                                <s id="ComparePrice-product-template"><span class="money">BDT
                                        {{ $product->selling_price }}</span></s>
                                <span
                                    class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                    <span id="ProductPrice-product-template"><span class="money">BDT
                                            {{ $product->discount_price }}</span></span>
                                </span>
                                @php
                                    $amount = $product->selling_price - $product->discount_price;
                                    $discount = ($amount / $product->selling_price) * 100;
                                @endphp
                                @if ($product->discount_price == null)
                                @else
                                    <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                        <span>You Save</span>
                                        <span id="SaveAmount-product-template" class="product-single__save-amount">
                                            <span class="money">BDT {{ round($amount) }}</span>
                                        </span>
                                        <span class="off">(<span>{{ round($discount) }}</span>%)</span>
                                    </span>
                                @endif
                            @endif

                        </p>


                        <div class="product-info">

                            <p class="product-type">
                                <span class="lbl">Brand:</span>
                                <span class="variant-sku">{{ $product['brand']['brand_name'] }}</span>
                            </p>

                            <p class="product-type">
                                <span class="lbl">Category:</span>
                                <span class="variant-sku">{{ $product['category']['category_name'] }}</span>
                            </p>

                            <p class="product-type">
                                <span class="lbl">SubCategory:</span>
                                <span class="variant-sku">{{ $product['subcategory']['subcategory_name'] }}</span>
                            </p>

                            <p class="product-tags">
                                <span class="lbl">Tags:</span>
                                <span class="variant-sku">{{ $product->product_tags }}</span>
                            </p>

                        </div>




                        <!--Product Tabs-->
                        <div class="tabs-listing">

                            <div class="tab-container">

                                <h3 class="acor-ttl active" rel="tab1">Product Details</h3>

                                <div id="tab1" class="tab-content">

                                    <div class="product-description rte">
                                        <p> {!! $product->long_descp !!} </p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!--End Product Tabs-->


                        <!-- Product Action -->
                        <div class="product-action clearfix">

                            <div class="product-form__item--quantity">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r"
                                                aria-hidden="true"></i></a>
                                        <input type="text" id="dqty" name="quantity" value="1"
                                            class="product-form__input qty">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="product-form__item--submit">
                                <input type="hidden" id="dproduct_id" value="{{ $product->id }}">
                                <button type="submit" name="add" class="btn product-form__cart-submit"
                                    onclick="addToCartDetails()">
                                    <span>Add to cart</span>
                                </button>
                            </div>

                            <div class="product-form__item--submit">
                                <input type="hidden" id="dproduct_id" value="{{ $product->id }}">
                                <button type="submit" name="add" class="btn product-form__cart-submit"
                                    onclick="addToWishList()">
                                    <span>Wish List</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Product Action -->


                    </div>

                </div>

            </div>
            <!--End-product-single-->

        </div>
        <!--#ProductSection-product-template-->
    </div>


</div>
<!--MainContent-->
@endsection
