@extends('dashboard')
@section('user')
    <!-- ############################## Page Title ############################## -->
    <div class="page section-header text-center">

        <div class="page-title">

            <div class="wrapper">

                <h1 class="page-width">Your Orders</h1>

            </div>

        </div>

    </div>
    <!--End Page Title-->



    <div class="container new-page" style="margin-bottom: 2rem;">

        <div class="row">

            <!-- ##############################  Sidebar ##############################  -->
            @include('frontend.body.dashboard_sidebar_menu')
            <!--End Sidebar-->


            <!-- ############################## Main Content ############################## -->
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">

                <div class="row">

                    <style>
                        .card-header::before {
                            display: none;
                        }
                    </style>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Shipping Details</h4>
                            </div>

                            <hr>

                            <div class="card-body">
                                <table class="table" style="background: #F4F6FA; font-weight: 600;">
                                    <tr>
                                        <th>Shipping Name:</th>
                                        <th>{{ $order->name }}</th>
                                    </tr>

                                    <tr>
                                        <th>Shipping Phone:</th>
                                        <th>{{ $order->phone }}</th>
                                    </tr>

                                    <tr>
                                        <th>Shipping Email:</th>
                                        <th>{{ $order->email }}</th>
                                    </tr>

                                    <tr>
                                        <th>Shipping Address:</th>
                                        <th>{{ $order->address }}</th>
                                    </tr>

                                    <tr>
                                        <th>Order Date:</th>
                                        <th>{{ $order->order_date }}</th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>


                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    Order Details
                                    <span class="text-danger">Invoice : {{ $order->invoice_no }}</span>
                                </h4>
                            </div>

                            <hr>

                            <div class="card-body">
                                <table class="table" style="background: #F4F6FA; font-weight: 600;">
                                    <tr>
                                        <th>Name:</th>
                                        <th>{{ $order->user->name }}</th>
                                    </tr>

                                    <tr>
                                        <th>Phone:</th>
                                        <th>{{ $order->user->phone }}</th>
                                    </tr>

                                    <tr>
                                        <th>Payment Type:</th>
                                        <th>{{ $order->payment_method }}</th>
                                    </tr>

                                    <tr>
                                        <th>Transx ID:</th>
                                        <th>{{ $order->transaction_id }}</th>
                                    </tr>

                                    <tr>
                                        <th>Invoice:</th>
                                        <th class="text-danger">{{ $order->invoice_no }}</th>
                                    </tr>

                                    <tr>
                                        <th>Order Amount:</th>
                                        <th>BDT {{ $order->amount }}</th>
                                    </tr>

                                    <tr>
                                        <th>Order Status:</th>
                                        <th> <span class="badge rounded-pill bg-warning">{{ $order->status }}</span></th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <!--End Main Content-->

        </div>

    </div>



    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                <div class="table-responsive">
                    <table class="table" style="font-weight: 600;">
                        <tbody>
                            <tr>

                                <td>
                                    <label>Image </label>
                                </td>

                                <td>
                                    <label>Product Name </label>
                                </td>

                                <td>
                                    <label>Quantity </label>
                                </td>

                                <td>
                                    <label>Price </label>
                                </td>

                            </tr>


                            @foreach ($orderItem as $item)
                                <tr>

                                    <td>
                                        <label><img src="{{ asset($item->product->product_thambnail) }}"
                                                style="width:70px; height:70px;"> </label>
                                    </td>

                                    <td>
                                        <label>{{ $item->product->product_name }}</label>
                                    </td>

                                    <td>
                                        <label>{{ $item->qty }} </label>
                                    </td>

                                    <td>
                                        <label>BDT {{ $item->price }} <br> Total = BDT {{ $item->price * $item->qty }}
                                        </label>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>
            

        </div>

    </div>
@endsection
