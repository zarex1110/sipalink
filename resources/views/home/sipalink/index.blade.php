@extends('home.layouts.main')

{{-- {{ dd($links) }} --}}

@section('container')

<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>SiPalink</h1>
                <h2>Sistem Informasi Kumpulan Link</h2>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

    {{-- <h1>Ini Tampilan Home</h1>
    {{ dd($links) }}

    <ol>
        @foreach(range('A', 'Z') as $letter)
        <li>
            @if($links->title()->has($letter))
            <a href="#{{ $letter }}">{{ $letter }}</a>
            @else
            <span class="disabled">{{ $letter }}</span>
            @endif
        </li>
        @endforeach
    </ol> --}}

</section><!-- End Hero -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Link Populer</h2>
            <p>Link yang paling sering dikunjungi : </p>
        </div>

        <div class="row">
            @foreach ( $links->take(4) as $link )
            <div class="col-xl-3 col-sm-6 g-col-6 g-col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="100">
                <div class="icon-box">
                        {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
                        <img src="assets/img/logo/{{$link->tags->slug}}.png" class="img-thumbnail mt-0 mb-4" alt="Preview">
                        {{-- {{ image($link-> link) }} --}}
                        <h4><a href="{{ $link -> link }}" target="_blank">{{ $link -> title }}</a></h4>
                        {{-- <p>{{ $link -> link }}</p> --}}
                        <p>{{ substr_replace($link -> link, "...", 50) }}</p>
                        {{-- <p>{{ $link -> description}}</p> --}}
                        {{-- <p>Read more .. > </p> --}}
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>All Links</h2>
            <p>Seluruh Link di BPS Kota Padang Panjang</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-bps">Umum</li>
            <li data-filter=".filter-bagian-umum">Bagian Umum</li>
            <li data-filter=".filter-pengolahan">Pengolahan</li>
            <li data-filter=".filter-produksi">Produksi</li>
            <li data-filter=".filter-sosial">Sosial</li>
            <li data-filter=".filter-nerwilis">Nerwilis</li>
            <li data-filter=".filter-distribusi">Distribusi</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ( $links as $link )
            <div class="row">
                <div class="col-lg-3 col-md-6 portfolio-item filter-{{$link->tags->slug}}">
                    <div class="d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
                            <img src="assets/img/logo/{{$link->tags->slug}}.png" class="img-thumbnail mt-0 mb-4" alt="Preview">
                            {{-- {{ image($link-> link) }} --}}
                            <h5><a href="{{ $link -> link }}" target="_blank">{{ $link -> title }}</a></h5>
                            {{-- <p>{{ $link -> link }}</p> --}}
                            <p>{{ $link -> link }}</p>
                            {{-- <p>{{ $link->tags-> title}}</p> --}}
                            {{-- <p>{{ $link -> description}}</p> --}}
                            {{-- <p>Read more .. > </p> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section><!-- End Portfolio Section -->

@endsection
