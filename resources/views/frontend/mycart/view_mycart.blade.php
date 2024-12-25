@extends('frontend.master_dashboard')
@section('main')
@section('title')
    My Cart | Fastive Mart - Online Vape Shop - Vape Mods, Kits &amp; E-Liquid
@endsection
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">My Cart</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">

        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">

                {{-- <div class="alert alert-success text-uppercase" role="alert">

                    <i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong>
                    You've got free shipping!
                </div> --}}

                <form action="#" method="post" class="cart style2">

                    <table>

                        <thead class="cart__row cart__header">
                            <tr>
                                <th colspan="2" class="text-center">Product</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-right">Total</th>
                                <th class="action">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody id="cartPage"></tbody>

                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-left"><a href="{{ url('/') }}"
                                        class="btn btn-secondary btn--small cart-continue">Continue shopping</a>
                                </td>
                            </tr>
                        </tfoot>

                    </table>

                </form>

            </div>


            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 mb-4">
                        @if (Session::has('coupon'))
                        @else
                            <div id="couponField">
                                <h5>Discount Codes</h5>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="address_zip">Enter your coupon code if you have one.</label>
                                        <input type="text" id="coupon_name">
                                    </div>
                                    <div class="actionRow">
                                        <div>
                                            <a type="submit" onclick="applyCoupon()" class="btn"
                                                style="color: white;">Apply
                                                Coupon</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>



                    <div class="col-12 col-sm-12 col-md-7 col-lg-7 cart__footer">
                        <div class="solid-border">
                            <div id="couponCalField">

                            </div>
                            <p class="cart_tearm">
                                <label>
                                    <input type="checkbox" name="tearm" class="checkbox" value="tearm" required="">
                                    I agree with the terms and conditions
                                </label>
                            </p>
                            <a href="{{ route('checkout') }}" class="btn mb-20 w-100">Proceed To CheckOut
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
