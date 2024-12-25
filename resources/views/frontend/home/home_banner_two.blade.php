@php
    $banner = App\Models\Banner::orderBy('id', 'ASC')
        ->where('id', '>=', 3)
        ->get();
@endphp

<div class="section imgBanners" style="margin-top: 3rem;">

    <div class="container">

        <div class="imgBnrOuter">

            <div class="row">

                @foreach ($banner as $item)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 pl-0">
                        <div class="inner">
                            <a href="{{ $item->banner_url }}">
                                <img data-src="{{ asset($item->banner_image) }}" src="{{ asset($item->banner_image) }}"
                                    alt="" class="blur-up lazyload" style="height: 275px;" />
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>

</div>
