@php
    $best_sellers = App\Models\Product::where('best_sellers', 1)
        ->orderBy('id', 'DESC')
        ->limit(10)
        ->get();
@endphp



<div class="section logo-section custom_mobile_category_slider" style="background: #f0f0f0; margin-top: 3rem;">
    <div class="container">

        <div class="row">
            <div class="col-7 col-sm-7 col-md-6 col-lg-6">
                <div class="section-header">
                    <h2 class="h2 heading-font custom_font"><b>Best Sellers</b></h2>
                </div>
            </div>
            <div class="col-5 col-sm-5 col-md-6 col-lg-6 text-right">
                <a href="#!" class="btn btn-primary">View All</a>
            </div>
        </div>

        <div class="row">
            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="logo-bar">
                    @foreach ($best_sellers as $product)
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"
                                    class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload round_image"
                                        data-src="{{ asset($product->product_thambnail) }}"
                                        src="{{ asset($product->product_thambnail) }}" alt="image" title="product" style="border-radius: 25px">
                                    <!-- End image -->

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
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view"
                                        data-toggle="modal" data-target="#content_quickview" id="{{ $product->id }}"
                                        onclick="productView(this.id)">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->


                            <!--start product details -->
                            <div class="text-center product-details">

                                <!-- category name -->
                                <div class="product-name">
                                    <h5 style="font-size: 0.8rem;">{{ $product['category']['category_name'] }}</h5>
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
    </div>
</div>
