

<!-- ############################## Header ############################## -->
<div class="header-wrap animated d-flex home8-jewellery-header" style="background-color: #fff;">

    <div class="container-fluid">

        <div class="row align-items-center">

            <div class="col-4 col-sm-4 col-md-3 col-lg-8 d-block d-lg-none">
                <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                    <i class="icon anm anm-times-l"></i>
                    <i class="anm anm-bars-r" style="color: #000;"></i>
                </button>
            </div>


            <!-- ############################## Logo ############################## -->
            <div class="logo col-4 col-sm-4 col-md-3 col-lg-2" style="padding: 0">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('adminbackend/logo/FestiveMartLogo.png') }}" alt="Element Vape"
                        title="Element Vape" />
                </a>
            </div>
            <!--End Logo-->


            <!-- ############################## Desktop Search ############################## -->
            <div class="text-center col-6 col-sm-6 col-md-6 col-lg-8 d-none d-lg-block">
            <form action="{{ route('search') }}" method="GET">
                <div class="input-group">
                    <input type="search"  name="query" class="rounded form-control" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button  type="submit" class="btn btn-outline-primary ml-2">search</button>
                  </div>
                  </form>
            </div>



            <!--End Desktop Search-->


            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                <div class="site-cart">

                    <!-- ############################## Search Icon ############################## -->
                    {{-- <button type="button" class="search-trigger" style="border: none;">
                        <i class="icon anm anm-search-l" style="font-size: 20px; color: #000;"></i>
                    </button> --}}
                    <!--End Search Icon-->


                    <!-- ############################## User ############################## -->
                    <a href="{{ route('login') }}" class="" title="User">
                        <i class="fas fa-user custom_user_icon_home"
                            style="margin: 0 1rem;font-size: 20px; color: #000;"></i>
                    </a>
                    <!--End User-->


                    <a href="{{ route('mycart') }}" class="site-header__cart" title="Cart">
                        <i class="icon anm anm-bag-l" style="color: #000;"></i>
                        <span class="site-header__cart-count" data-cart-render="item_count" id="cartQty"> </span>
                    </a>
                    <!--Minicart Popup-->
                    <div id="header-cart" class="block block-cart">
                        <!--   // mini cart start with ajax -->
                        <div id="miniCart"></div>
                        <!--   // End mini cart start with ajax -->
                        <div class="total">
                            <div class="total-in">
                                <span class="label">Cart Subtotal:</span>
                                <span class="product-price">
                                    <span class="money">BDT</span>
                                    <span class="money" id="cartSubTotal"></span>
                                </span>
                            </div>
                            <div class="text-center buttonSet">
                                <a href="{{ route('mycart') }}" class="btn btn-secondary btn--small"
                                    style="width: 100%;">View Cart
                                </a>
                                {{-- <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a> --}}
                            </div>
                        </div>
                    </div>
                    <!--End Minicart Popup-->

                </div>

            </div>

        </div>


        <!-- ############################## Desktop Menu ############################## -->
        <div class="row">

            <nav class="belowlogo" id="AccessibleNav">

                <ul id="siteNav" class="site-nav medium center hidearrow">

                    <li class="lvl1">
                        <a href="{{ url('/') }}">
                            <b>Home</b>
                        </a>
                    </li>


                    @php
                        $categories = App\Models\Category::orderBy('id', 'ASC')
                            ->limit(8)
                            ->get();
                    @endphp
                    @foreach ($categories as $category)
                        <li class="lvl1 parent megamenu">
                            <a href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}"><b>{{ $category->category_name }}</b>

                                <i class="anm anm-angle-down-l"></i></a>

                            @php
                                $subcategories = App\Models\SubCategory::where('category_id', $category->id)
                                    ->orderBy('subcategory_name', 'ASC')
                                    ->get();
                            @endphp
                            <div class="megamenu style1">

                                <ul class="grid">

                                    <li class="grid__item lvl-1 col-md-3 col-lg-3">

                                        <ul class="subLinks">

                                            @foreach ($subcategories as $subcategory)
                                                <li class="lvl-2">
                                                    <a href="{{ url('product/subcategory/' . $subcategory->id . '/' . $subcategory->subcategory_slug) }}"
                                                        class="site-nav lvl-2">{{ $subcategory->subcategory_name }}</a>
                                                </li>
                                            @endforeach


                                        </ul>

                                    </li>

                                </ul>

                            </div>

                        </li>
                    @endforeach

                </ul>

            </nav>

        </div>
        <!--End Desktop Menu-->

    </div>

</div>
<!--End Header-->



<!-- ############################## Mobile Menu ############################## -->
<div class="mobile-nav-wrapper" role="navigation">

    {{-- <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i>Close Menu</div> --}}

    <!-- ############################## Desktop Search ############################## -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-8" style="margin: 1rem 0;">
        <div class="input-group">
            <input type="search" class="rounded form-control" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
          </div>
    </div>
    <!--End Desktop Search-->

    <ul id="MobileNav" class="mobile-nav">

        <li class="lvl1">
            <a href="{{ url('/') }}">
                <b>Home</b></a>
        </li>


        @php
            $categories = App\Models\Category::orderBy('id', 'ASC')->get();
        @endphp
        @foreach ($categories as $category)
            <li class="lvl1 parent megamenu">
                <a href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">{{ $category->category_name }}
                    <i class="anm anm-plus-l"></i>
                </a>

                @php
                    $subcategories = App\Models\SubCategory::where('category_id', $category->id)
                        ->orderBy('subcategory_name', 'ASC')
                        ->get();
                @endphp
                <ul>
                    @foreach ($subcategories as $subcategory)
                        <li>
                            <a href="{{ url('product/subcategory/' . $subcategory->id . '/' . $subcategory->subcategory_slug) }}"
                                class="site-nav">{{ $subcategory->subcategory_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach


    </ul>

</div>
<!--End Mobile Menu-->
