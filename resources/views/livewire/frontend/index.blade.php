@section('meta')
<meta property="title" content="{{ settings('site_meta_title') }}" />
<meta name="keywords" content="{{ settings('site_meta_keywords') }}" />
<meta property="og:title" content="{{ settings('site_meta_title') }}" />
<meta property="og:description" content="{{ settings('site_meta_description') }}" />
<meta name="description" content="{{ settings('site_meta_description') }}" />
<meta property="og:image" content="{{ uploadedFIle(settings('site_meta_image')) }}" />
<meta property="og:image:secure_url" content="{{ uploadedFIle(settings('site_meta_image')) }}" />
<meta name="twitter:title" content="{{ settings('site_meta_title') }}" />
<meta name="twitter:description" content="{{ settings('site_meta_description') }}" />
<meta name="twitter:image" content="{{ uploadedFIle(settings('site_meta_image')) }}" />
@endsection
<div>
    <!-- < Hero Section -->
    <section class="hero bg--white">

        <div class="container-fluid position-relative px-0">
            @php
                $galleries = is_array(json_decode(settings('home_galleries_image'))) ? json_decode(settings('home_galleries_image')) : [];
                $links = @json_decode(settings('home_galleries_link'));
            @endphp
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero--content w--100 d-flex justify-content-center align-items-center banner-slider">
                        @foreach ($galleries as $key => $gallery)
                        <a href="{{ $links[$key] }}">
                            <div class="thumb--wrap">
                                    <img src="{{ uploadedFile($galleries[$key]) }}" alt="Gallary">
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Hero Section />-->

    <!-- Categories product section -->
    @foreach ($this->sections as $section)
    <section class="browse--section py-10">
        <div class="container">
            {{-- <p class="text-end">
                @if($section->button_url && $section->button_text)
                <a href="{{ $section->button_url }}" class="viewall">{{ $section->button_text }}</a>
                @endif
            </p> --}}
            <div class="row gy-5 justify-content-center">
                <div class="col-xl-7 col-lg-12 col-md-8">
                    <div class="section-content-4 d-flex justify-content-center flex-column align-items-center mb-3">
                        <h6 class="title wow animate__animated animate__fadeInUp text-center fs--32 fw--600 splite-text mb-2" data-splitting data-wow-delay="0.2s">{{ $section->name }}</h6>
                        @if($section->short_description)
                        <p class="text--black text-center fw--600">{{ $section->short_description }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                @php
                $products = Cache::rememberForever('products-section-'.$section->id, function () use($section){
                    return App\Models\Product::whereIn('id',$section->products->pluck('product_id'))
                                        ->publish()
                                        ->orderByPrice()
                                        ->get();
                });
                @endphp

                @foreach ($products as $product)
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <livewire:frontend.product-box :$product wire:key='{{ $product->id }}' lazy>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endforeach
    <!-- Categories product section -->

    <!-- footer top section -->
    <section class="footertop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contentwrp">
                        {!! settings('footer_content') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer top section --> 
</div>
