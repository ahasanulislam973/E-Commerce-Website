<!DOCTYPE html>
<html class="no-js" lang="en">


<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Fastive Mart - Online Vape Shop - Vape Mods, Kits &amp; E-Liquid</title>

    <meta name="description" content="description">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('adminbackend/logo/FestiveMartLogo.png') }}" />

    <!-- ############################## Font Awesome CDN ############################## -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">

    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Khojki&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <style>
        .pointer {
            cursor: pointer;
        }
    </style>

</head>



<body class="template-index home8-jewellery belle">

    <!-- <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div> -->


    <div class="pageWrapper">

        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value=""
                        placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->



        @include('frontend.body.header')

        

        <!--Body Content-->
        <div id="page-content">

            @yield('user')

        </div>
        <!--End Body Content-->


        <!-- ############################## Footer ############################## -->
        @include('frontend.body.footer')
        <!--End Footer-->



        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!--Quick View popup-->
        @include('frontend.body.quickview')
        <!--End Quick View popup-->



        <!-- AGE VERIFICATION Popup -->
        @include('frontend.body.age_verification')
        <!-- End AGE VERIFICATION Popup -->



        <!-- Including Jquery -->
        <script src="{{ asset('frontend/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/jquery.cookie.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/instagram-feed.js') }}"></script>
        <!-- Including Javascript -->
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/lazysizes.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!--Instagram Js-->
        <script>
            var userFeed = new Instafeed({
                get: 'user',
                userId: '8983165779',
                accessToken: '8983165779.1677ed0.f3242e4ff60b428a81c25d118e02f44f',
                resolution: 'low_resolution',
                sortBy: 'most-recent',
                limit: 8,
            });
            userFeed.run();
        </script>
        <!--End Instagram Js-->
        <!--For Newsletter Popup-->
        <script>
            jQuery(document).ready(function() {
                jQuery('.closepopup').on('click', function() {
                    jQuery('#popup-container').fadeOut();
                    jQuery('#modalOverly').fadeOut();
                });

                var visits = jQuery.cookie('visits') || 0;
                visits++;
                jQuery.cookie('visits', visits, {
                    expires: 1,
                    path: '/'
                });
                console.debug(jQuery.cookie('visits'));
                if (jQuery.cookie('visits') > 1) {
                    jQuery('#modalOverly').hide();
                    jQuery('#popup-container').hide();
                } else {
                    var pageHeight = jQuery(document).height();
                    jQuery('<div id="modalOverly"></div>').insertBefore('body');
                    jQuery('#modalOverly').css("height", pageHeight);
                    jQuery('#popup-container').show();
                }
                if (jQuery.cookie('noShowWelcome')) {
                    jQuery('#popup-container').hide();
                    jQuery('#active-popup').hide();
                }
            });

            jQuery(document).mouseup(function(e) {
                var container = jQuery('#popup-container');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.fadeOut();
                    jQuery('#modalOverly').fadeIn(200);
                    jQuery('#modalOverly').hide();
                }
            });

            /*--------------------------------------
            Promotion / Notification Cookie Bar
            -------------------------------------- */
            if (Cookies.get('promotion') != 'true') {
                $(".notification-bar").show();
            }
            $(".close-announcement").on('click', function() {
                $(".notification-bar").slideUp();
                Cookies.set('promotion', 'true', {
                    expires: 1
                });
                return false;
            });
        </script>
        <!--End For Newsletter Popup-->


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;
                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;
                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;
                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }
            @endif
        </script>



        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })



            /// Start product view with Modal
            function productView(id) {
                // alert(id)
                $.ajax({
                    type: 'GET',
                    url: '/product/view/modal/' + id,
                    dataType: 'json',
                    success: function(data) {
                        // console.log(data)
                        $('#pimage').attr('src', '/' + data.product.product_thambnail);
                        $('#pname').text(data.product.product_name);
                        $('#pcode').text(data.product.product_code);
                        $('#pstock').text(data.product.product_qty);
                        $('#pprice').text(data.product.selling_price);
                        $('#pshort').text(data.product.short_descp);
                        $('#pbrand').text(data.product.brand.brand_name);
                        $('#pcategory').text(data.product.category.category_name);
                        $('#psubcategory').text(data.product.subcategory.subcategory_name);
                        $('#ptags').text(data.product.product_tags);

                        $('#product_id').val(id);
                        $('#qty').val(1);


                        // Product Price
                        if (data.product.discount_price == null) {
                            $('#pprice').text('');
                            $('#oldprice').text('');
                            $('#pprice').text(data.product.selling_price);
                        } else {
                            $('#pprice').text(data.product.discount_price);
                            $('#oldprice').text(data.product.selling_price);
                        } // end else

                        /// Start Stock Option
                        if (data.product.product_qty > 0) {
                            $('#aviable').text('');
                            $('#stockout').text('');
                            $('#aviable').text('In Stock');
                        } else {
                            $('#aviable').text('');
                            $('#stockout').text('');
                            $('#stockout').text('Stock Out');
                        }
                        ///End Start Stock Option
                    }
                })
            }
            // End Product View With Modal


            /// Start Add To Cart Prodcut
            function addToCart() {
                var product_name = $('#pname').text();
                var id = $('#product_id').val();
                var quantity = $('#qty').val();
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    data: {
                        quantity: quantity,
                        product_name: product_name
                    },
                    url: "/cart/data/store/" + id,
                    success: function(data) {
                        miniCart();
                        $('#closeModal').click();
                        // console.log(data)

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                type: 'success',
                                title: data.success,
                            })
                        } else {

                            Toast.fire({
                                type: 'error',
                                title: data.error,
                            })
                        }
                        // End Message
                    }
                })
            }
            /// End Add To Cart Product


            /// Start Details Page Add To Cart Product
            function addToCartDetails() {
                var product_name = $('#dpname').text();
                var id = $('#dproduct_id').val();
                var quantity = $('#dqty').val();
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    data: {
                        quantity: quantity,
                        product_name: product_name
                    },
                    url: "/dcart/data/store/" + id,
                    success: function(data) {
                        miniCart();
                        // console.log(data)

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                type: 'success',
                                title: data.success,
                            })
                        } else {

                            Toast.fire({
                                type: 'error',
                                title: data.error,
                            })
                        }
                        // End Message
                    }
                })
            }
            /// End Details Page Add To Cart Product
        </script>



        <script type="text/javascript">
            function miniCart() {
                $.ajax({
                    type: 'GET',
                    url: '/product/mini/cart',
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response)

                        $('span[id="cartSubTotal"]').text(response.cartTotal);
                        $('#cartQty').text(response.cartQty);

                        var miniCart = ""

                        $.each(response.carts, function(key, value) {
                            miniCart +=
                                `
                                <ul class="mini-products-list">

                                    <li class="item" style="font-size: 20px;">

                                        <a class="product-image" href="#">
                                            <img src="/${value.options.image}"
                                                alt="" title="" />
                                        </a>

                                        <div class="product-details">
                                            <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)" class="remove">
                                                <i class="anm anm-times-l" aria-hidden="true"></i>
                                            </a>
                                            <a class="pName" href="cart.html" style="font-size: 15px;font-weight: 600;">${value.name}</a>
                                            <div class="priceRow" style="font-size: 15px;">
                                                <div class="product-price">
                                                    <span class="money">${value.qty}</span> x <span class="money">${value.price}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <hr>
                            `
                        });

                        $('#miniCart').html(miniCart);

                    }
                })
            }
            miniCart();

            /// Mini Cart Remove Start
            function miniCartRemove(rowId) {
                $.ajax({
                    type: 'GET',
                    url: '/minicart/product/remove/' + rowId,
                    dataType: 'json',
                    success: function(data) {
                        miniCart();
                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                type: 'success',
                                title: data.success,
                            })
                        } else {

                            Toast.fire({
                                type: 'error',
                                title: data.error,
                            })
                        }
                        // End Message
                    }
                })
            }
            /// Mini Cart Remove End
        </script>



        <!--  // Start Load MY Cart // -->
        <script type="text/javascript">
            function cart() {
                $.ajax({
                    type: 'GET',
                    url: '/get-cart-product',
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response)

                        var rows = ""

                        $.each(response.carts, function(key, value) {
                            rows +=
                                `
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#">
                                            <img class="cart__image" src="/${value.options.image}"
                                                alt="">
                                        </a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">${value.name}</a>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">BDT ${value.price}</span>
                                    </td>
                                    <td class="text-right cart__update-wrapper cart-flex-item">
                                        <div class="text-center cart__qty">
                                            <div class="qtyField">
                                                <a type="submit" class="qtyBtn minus" id="${value.rowId}" onclick="cartDecrement(this.id)" href="javascript:void(0);">
                                                    <i class="icon icon-minus"></i>
                                                </a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]"
                                                    id="qty" value="${value.qty}" min="1" pattern="[0-9]*">
                                                <a  type="submit" class="qtyBtn plus" id="${value.rowId}" onclick="cartIncrement(this.id)" href="javascript:void(0);">
                                                    <i class="icon icon-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">BDT ${value.subtotal}</span></div>
                                    </td>
                                    <td class="text-center small--hide">
                                        <a type="submit" class="btn btn--secondary cart__remove" title="Remove tem" id="${value.rowId}" onclick="cartRemove(this.id)">
                                            <i class="icon anm anm-times-l"></i>
                                        </a>
                                    </td>
                                </tr>
                            `
                        });

                        $('#cartPage').html(rows);

                    }
                })
            }
            cart();


            // Cart Remove Start
            function cartRemove(id) {
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: "/cart-remove/" + id,
                    success: function(data) {
                        cart();
                        miniCart();
                        couponCalculation();

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',

                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: data.success,
                            })
                        } else {

                            Toast.fire({
                                type: 'error',
                                icon: 'error',
                                title: data.error,
                            })
                        }
                        // End Message
                    }
                })
            }
            // Cart Remove End


            // Cart INCREMENT
            function cartIncrement(rowId) {
                $.ajax({
                    type: 'GET',
                    url: "/cart-increment/" + rowId,
                    dataType: 'json',
                    success: function(data) {
                        couponCalculation();
                        cart();
                        miniCart();
                    }
                });
            }
            // Cart INCREMENT End


            // Cart Decrement Start
            function cartDecrement(rowId) {
                $.ajax({
                    type: 'GET',
                    url: "/cart-decrement/" + rowId,
                    dataType: 'json',
                    success: function(data) {
                        couponCalculation();
                        cart();
                        miniCart();
                    }
                });
            }
            // Cart Decrement End
        </script>
        <!--  // End Load MY Cart // -->


        <!--  ////////////// Start Apply Coupon ////////////// -->
        <script type="text/javascript">
            function applyCoupon() {
                var coupon_name = $('#coupon_name').val();
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    data: {
                        coupon_name: coupon_name
                    },
                    url: "/coupon-apply",
                    success: function(data) {

                        couponCalculation();

                        if (data.validity == true) {
                            $('#couponField').hide();
                        }

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',

                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: data.success,
                            })
                        } else {

                            Toast.fire({
                                type: 'error',
                                icon: 'error',
                                title: data.error,
                            })
                        }
                        // End Message
                    }
                })
            }

            // Start CouponCalculation Method
            function couponCalculation() {
                $.ajax({
                    type: 'GET',
                    url: "/coupon-calculation",
                    dataType: 'json',
                    success: function(data) {
                        if (data.total) {
                            $('#couponCalField').html(
                                `
                                    <div class="pb-2 row border-bottom">
                                        <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                        <span class="text-right col-12 col-sm-6"><span class="money">BDT ${data.total}</span></span>
                                    </div>
                                    <div class="pt-2 pb-2 row border-bottom">
                                        <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand
                                                Total</strong></span>
                                        <span class="text-right col-12 col-sm-6 cart__subtotal-title cart__subtotal"><span
                                                class="money">BDT ${data.total}</span></span>
                                    </div>
                                `
                            )
                        } else {
                            $('#couponCalField').html(
                                `
                                    <div class="pb-2 row border-bottom">
                                        <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                        <span class="text-right col-12 col-sm-6">
                                            <span class="money">BDT ${data.subtotal}</span>
                                        </span>
                                    </div>
                                    <div class="pb-2 row border-bottom">
                                        <span class="col-12 col-sm-6 cart__subtotal-title">Coupon</span>
                                        <span class="text-right col-12 col-sm-6">
                                            <span class="money">${data.coupon_name} <a type="submit" onclick="couponRemove()" class="pointer"><i class="fa-solid fa-trash"></i></a></span>
                                        </span>
                                    </div>
                                    <div class="pb-2 row border-bottom">
                                        <span class="col-12 col-sm-6 cart__subtotal-title">Discount Amoount</span>
                                        <span class="text-right col-12 col-sm-6">
                                            <span class="money">BDT ${data.discount_amount}</span>
                                        </span>
                                    </div>
                                    <div class="pt-2 pb-2 row border-bottom">
                                        <span class="col-12 col-sm-6 cart__subtotal-title">
                                            <strong>Grand Total</strong>
                                        </span>
                                        <span class="text-right col-12 col-sm-6 cart__subtotal-title cart__subtotal">
                                            <span class="money">BDT ${data.total_amount}</span>
                                        </span>
                                    </div>
                                `
                            )
                        }
                    }
                })
            }
            couponCalculation();
            // End CouponCalculation Method
        </script>
        <!--  ////////////// End Apply Coupon ////////////// -->


        <script type="text/javascript">
            // Coupon Remove Start
            function couponRemove() {
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: "/coupon-remove",
                    success: function(data) {
                        couponCalculation();
                        $('#couponField').show();
                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',

                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: data.success,
                            })
                        } else {

                            Toast.fire({
                                type: 'error',
                                icon: 'error',
                                title: data.error,
                            })
                        }
                        // End Message
                    }
                })
            }
            // Coupon Remove End
        </script>


    </div>
</body>


</html>
