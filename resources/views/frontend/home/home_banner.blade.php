@php
    $banner = App\Models\Banner::orderBy('id', 'ASC')
        ->limit(3)
        ->get();
@endphp


<div class="section imgBanners">

    <div class="container">

        <div class="imgBnrOuter">

            <div class="row">

                @foreach ($banner as $item)
                    <div class="pl-0 col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="inner">
                            <a href="{{ $item->banner_url }}">
                                <img data-src="{{ asset($item->banner_image) }}" src="{{ asset($item->banner_image) }}"
                                    alt="" class="blur-up lazyload round_image" style="height: 275px;border-radius: 25px" />
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>

</div>
