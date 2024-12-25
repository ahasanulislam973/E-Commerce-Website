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



    <div class="container new-page" style="padding-bottom: 1rem;">

        <div class="row">

            <!-- ##############################  Sidebar ##############################  -->
            @include('frontend.body.dashboard_sidebar_menu')
            <!--End Sidebar-->



            <!-- ############################## Main Content ############################## -->
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">

                <div class="block block-rewards-account-summary order-details-items">

                    <div class="block block-rewards-account-summary">

                        <div class="block-content">

                            <div class="table-wrapper orders-recent">

                                <table class="data-table table" style="background-color: #ddd;font-weight: 600;">

                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Payment</th>
                                            <th>Invoice</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>BDT {{ $order->amount }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ $order->invoice_no }}</td>
                                                <td>
                                                    @if ($order->status == 'pending')
                                                        <span class="badge rounded-pill bg-warning">Pending</span>
                                                    @elseif ($order->status == 'confirm')
                                                        <span class="badge rounded-pill bg-info">Confirm</span>
                                                    @elseif ($order->status == 'processing')
                                                        <span class="badge rounded-pill bg-danger">Processing</span>
                                                    @elseif ($order->status == 'deliverd')
                                                        <span class="badge rounded-pill bg-success">Deliverd</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('user/order_detials/' . $order->id) }}"
                                                        class="btn-sm btn-success"><i class="fa-solid fa-eye"></i> View</a>
                                                    <a href="{{ url('user/invoice_download/' . $order->id) }}"
                                                        class="btn-sm btn-danger"><i class="fa-solid fa-download"></i>
                                                        Invoice</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>


                            <div class="order-products-toolbar toolbar bottom">
                                <div id="am-page-count" style="display: none">1</div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!--End Main Content-->

        </div>

    </div>
@endsection
