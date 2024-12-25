@php
    $brand = App\Models\Brand::orderBy('id', 'DESC')->get();
@endphp



<div class="section logo-section custom_mobile_category_slider" style="background-color: #000;">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                <style>
                    .custom_slick .slick-prev::before,
                    .custom_slick .slick-next::before {
                        color: #fff;
                    }
                </style>
                <div class="logo-bar custom_slick">
                    @foreach ($brand as $category)
                        <div class="logo-bar__item">
                            <a class="round_image"
                                href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">
                                <img src="{{ asset($category->brand_image) }}" alt="" title=""
                                    style="border-radius: 25px; width:120px; height:120px;" />
                            </a>

                            <!--<h6>-->
                            <!--    <a-->
                            <!--        href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">-->
                            <!--        {{ $category->category_name }}-->
                            <!--    </a>-->
                            <!--</h6>-->

                            @php
                                $products = App\Models\Product::where('category_id', $category->id)->get();
                            @endphp

                            <!--<span>{{ count($products) }} items</span>-->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
