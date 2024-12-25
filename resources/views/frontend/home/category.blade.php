


@php
    $categories = App\Models\Category::orderBy('id', 'ASC')->get();
@endphp



<div class="section logo-section custom_mobile_category_slider">
    <div class="container">
        <div class="row">
            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="logo-bar">
                    @foreach ($categories as $category)
                        <div class="logo-bar__item">
                            <a class="round_image" href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">
                                <img src="{{ asset($category->category_image) }}" alt="" title=""
                                   style="border-radius: 25px"/>
                            </a>

                            <h6>
                                <a
                                    href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">
                                    {{ $category->category_name }}
                                </a>
                            </h6>

                            @php
                                $products = App\Models\Product::where('category_id', $category->id)->get();
                            @endphp

                            <span>{{ count($products) }} items</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>








