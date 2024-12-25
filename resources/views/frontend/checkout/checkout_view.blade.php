@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Checkout Page | Fastive Mart - Online Vape Shop - Vape Mods, Kits &amp; E-Liquid
@endsection
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Checkout</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->


    <div class="container">

        <form method="post" action="{{ route('checkout.store') }}">
            @csrf

            <div class="row billing-fields">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">

                    <div class="create-ac-content bg-light-gray padding-20px-all">

                        <fieldset>

                            <h2 class="login-title mb-3">Billing details</h2>

                            <div class="row">

                                <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                    <label for="input-firstname">Full Name <span class="required-f">*</span></label>
                                    <input type="text" name="shipping_name" value="{{ Auth::user()->name }}" required>
                                </div>

                                <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                    <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                    <input name="email" name="shipping_email" value="{{ Auth::user()->email }}" required>
                                </div>

                                <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                    <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                    <input type="text" name="shipping_phone" value="{{ Auth::user()->phone }}" required>
                                </div>

                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                    <label for="input-company">Address<span class="required-f">*</span></label>
                                    <input type="text" name="shipping_address" value="{{ Auth::user()->address }}"
                                        required>
                                </div>

                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                    <label for="input-company">Notes</label>
                                    <textarea class="form-control resize-both" rows="3" name="notes"></textarea>
                                </div>

                            </div>

                        </fieldset>

                    </div>

                </div>


                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>

                            <div class="table-responsive-sm order-table">
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Product Image</th>
                                            <th class="text-left">Product Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts as $item)
                                            <tr>
                                                <td class="cart__image-wrapper cart-flex-item">
                                                    <a href="#">
                                                        <img class="cart__image" src="{{ asset($item->options->image) }}"
                                                            alt="" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>x {{ $item->qty }}</td>
                                                <td>BDT {{ $item->subtotal }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                        @if (Session::has('coupon'))
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Subtotal</strong></td>
                                                <td>BDT {{ $cartTotal }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Coupon Name</strong></td>
                                                <td>{{ session()->get('coupon')['coupon_name'] }}
                                                    <br>
                                                    ({{ session()->get('coupon')['coupon_discount'] }}% )
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Coupon Discount</strong></td>
                                                <td>BDT {{ session()->get('coupon')['discount_amount'] }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Grand Total</strong></td>
                                                <td>BDT {{ session()->get('coupon')['total_amount'] }}</td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Grand Total</strong></td>
                                                <td>BDT {{ $cartTotal }}</td>
                                            </tr>
                                        @endif
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <hr />

                        <div class="create-ac-content bg-light-gray padding-20px-all">

                            <fieldset>

                                <h2 class="login-title mb-3">Payment Method</h2>

                                <div class="row">

                                    {{-- <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <input type="radio" id="stripe" name="payment_option" value="stripe">
                                        <label for="stripe">Stripe</label>
                                    </div> --}}

                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <input type="radio" id="cash" name="payment_option" value="cash" required>
                                        <label for="cash">Cash on delivery</label>
                                    </div>

                                    {{-- <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                        <input type="radio" id="card" name="payment_option" value="card">
                                        <label for="card">Online Getway</label>
                                    </div> --}}

                                </div>


                            </fieldset>

                        </div>

                        <hr />

                        <div class="your-payment">

                            <div class="payment-method">

                                <div class="order-button-payment">
                                    <button type="submit" class="btn" value="Place order">Place order</button>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </form>

    </div>
@endsection
