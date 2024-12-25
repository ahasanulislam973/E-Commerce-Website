@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Cash Payment | Fastive Mart - Online Vape Shop - Vape Mods, Kits &amp; E-Liquid
@endsection
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Cash On Delivery Payment</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->


    <div class="container">

        <div class="row billing-fields">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">

                <div class="your-order">
                    <h2 class="order-title mb-4">Your Order</h2>

                    <div class="table-responsive-sm order-table">
                        <table class="bg-white table table-bordered table-hover">
                            <tfoot class="font-weight-600">
                                @if (Session::has('coupon'))
                                    <tr>
                                        <td><strong>Subtotal</strong></td>
                                        <td>BDT {{ $cartTotal }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Coupon Name</strong></td>
                                        <td>{{ session()->get('coupon')['coupon_name'] }}
                                            <br>
                                            ({{ session()->get('coupon')['coupon_discount'] }}% )
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Coupon Discount</strong></td>
                                        <td>BDT {{ session()->get('coupon')['discount_amount'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Grand Total</strong></td>
                                        <td>BDT {{ session()->get('coupon')['total_amount'] }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td><strong>Grand Total</strong></td>
                                        <td>BDT{{ $cartTotal }}</td>
                                    </tr>
                                @endif

                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>


            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                <div class="your-order">
                    <h2 class="order-title mb-4">Make Cash Payment</h2>

                    <div class="table-responsive-sm order-table">
                        <form action="{{ route('cash.order') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <label for="card-element">
                                    <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
                                    <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
                                    <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
                                    <input type="hidden" name="address" value="{{ $data['shipping_address'] }}">
                                    <input type="hidden" name="notes" value="{{ $data['notes'] }}">
                                </label>
                                <!-- Used to display form errors. -->
                            </div>
                            <br>
                            <button class="btn btn-primary">Submit Payment</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
