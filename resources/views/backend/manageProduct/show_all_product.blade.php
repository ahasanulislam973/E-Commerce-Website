@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Product Management Calculations</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Price Calculations</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>User Name</th>
                                <th>Product Name</th>
                                <th>Product Thumbnail</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Discount Price</th>
                                <th>Total Price (Price * Quantity - Discount Price)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($calculations as $key => $calculation)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $calculation['user_name'] }}</td>
                                    <td>{{ $calculation['product_name'] }}</td>
                                    <td><img src="{{ $calculation['product_thumbnail'] }}" alt="Product Thumbnail" style="width: 70px; height: 70px;"></td>
                                    <td>{{ $calculation['price'] }}</td>
                                    <td>{{ $calculation['quantity'] }}</td>
                                    <td>{{ $calculation['discount_price'] }}</td>
                                    <td>{{ $calculation['total_price'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <a href="{{ route('export.product.calculations') }}" class="btn btn-primary">Download Excel</a> --}}
                </div>
        </div>
    </div>
@endsection
