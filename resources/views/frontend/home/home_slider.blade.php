@php
    $slider = App\Models\Slider::orderBy('id', 'ASC')->get();
@endphp



<div class="home-slideshow container" style="padding-bottom:0px !important">

    @foreach ($slider as $item)
        <div class="slide">
            <div class="blur-up lazyload">
                <a href="{{ $item->slider_url }}">
                    <img class="blur-up lazyload" data-src="{{ asset($item->slider_image) }}"
                        src="{{ asset($item->slider_image) }}" alt="" title="" style="
    border-radius: 25px;" />
                </a>
            </div>
        </div>
    @endforeach

</div>
