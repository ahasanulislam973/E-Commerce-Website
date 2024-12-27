@extends('admin.admin_dashboard')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Product</div>
    </div>
    <hr>
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="productForm" action="{{ route('store.productManagement') }}" method="POST">
                                @csrf

                                <!-- User Dropdown -->
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Select User</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select name="user_id" class="form-control" required>
                                            <option value="">Select User</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Product Section -->
                                <div id="productContainer">
                                    <div class="card product-item mb-3">
                                        <div class="card-header">
                                            <h6 class="mb-0">Select Product</h6>
                                            <button type="button" class="btn btn-danger btn-sm remove-product" style="float: right;">&times;</button>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="form-group col-sm-12">
                                                    <select name="products[0][product_id]" class="form-control product-dropdown" required>
                                                        <option value="">Select Product</option>
                                                        @foreach($products as $product)
                                                        <option value="{{ $product->id }}" data-thumbnail="{{ asset($product->product_thambnail) }}">
                                                            {{ $product->product_name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="product-thumbnail text-center mb-3 d-none">
                                                <img src="" alt="Product Thumbnail" class="img-thumbnail" style="max-width: 150px;">
                                            </div>
                                            <!-- Dynamic Fields -->
                                            <div class="dynamic-fields d-none">
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Price</h6>
                                                    </div>
                                                    <div class="form-group col-sm-9 text-secondary">
                                                        <input type="text" name="products[0][price]" class="form-control" required />
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Quantity</h6>
                                                    </div>
                                                    <div class="form-group col-sm-9 text-secondary">
                                                        <input type="text" name="products[0][quantity]" class="form-control" required />
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Discount Price</h6>
                                                    </div>
                                                    <div class="form-group col-sm-9 text-secondary">
                                                        <input type="text" name="products[0][discount_price]" class="form-control" value="0" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add More Button -->
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="button" id="addMoreProduct" class="btn btn-success">
                                            <i class="bx bx-plus"></i> Add More Product
                                        </button>
                                    </div>
                                </div>

                                <hr>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let productIndex = 1;

        // Show dynamic fields and thumbnail when a product is selected
        $(document).on('change', '.product-dropdown', function() {
            const parent = $(this).closest('.product-item');
            const thumbnail = $(this).find(':selected').data('thumbnail');
            if ($(this).val()) {
                parent.find('.dynamic-fields').removeClass('d-none');
                parent.find('.product-thumbnail').removeClass('d-none').find('img').attr('src', thumbnail);
            } else {
                parent.find('.dynamic-fields').addClass('d-none');
                parent.find('.product-thumbnail').addClass('d-none').find('img').attr('src', '');
            }
        });

        // Add more product dropdown and fields
        $('#addMoreProduct').click(function() {
            $('#productContainer').append(`
            <div class="card product-item mb-3">
                <div class="card-header">
                    <h6 class="mb-0">Select Product</h6>
                    <button type="button" class="btn btn-danger btn-sm remove-product" style="float: right;">&times;</button>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="form-group col-sm-12">
                            <select name="products[${productIndex}][product_id]" class="form-control product-dropdown" required>
                                <option value="">Select Product</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}" data-thumbnail="{{ asset($product->product_thambnail) }}">
                                        {{ $product->product_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="product-thumbnail text-center mb-3 d-none">
                        <img src="" alt="Product Thumbnail" class="img-thumbnail" style="max-width: 150px;">
                    </div>
                    <div class="dynamic-fields d-none">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Price</h6>
                            </div>
                            <div class="form-group col-sm-9 text-secondary">
                                <input type="text" name="products[${productIndex}][price]" class="form-control" required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Quantity</h6>
                            </div>
                            <div class="form-group col-sm-9 text-secondary">
                                <input type="text" name="products[${productIndex}][quantity]" class="form-control" required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Discount Price</h6>
                            </div>
                            <div class="form-group col-sm-9 text-secondary">
                                <input type="text" name="products[${productIndex}][discount_price]" class="form-control" value="0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `);
            productIndex++;
        });

        // Remove the product card when the cross button is clicked
        $(document).on('click', '.remove-product', function() {
            $(this).closest('.product-item').remove();
        });

        // Handle form submission with SweetAlert
        $('#productForm').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.success,
                        }).then(() => {
                            // Redirect to the desired route after closing the alert
                            window.location.href = "{{ route('all.productManagement') }}";
                        });
                    }
                },
                error: function(response) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: response.responseJSON.error || 'Something went wrong!',
                    });
                }
            });
        });
    });
</script>

@endsection