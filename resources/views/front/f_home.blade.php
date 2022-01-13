@extends('front.layouts.main_layout')

@section('main_content')
<div role="main" class="main">
<section class="section border-0 video overlay overlay-show overlay-op-2 m-0" data-video-path="template/video/memory-of-a-woman" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
    <div class="container position-relative z-index-3 h-100">
        <div class="row align-items-center h-100">
            <div class="col">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <h1 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                            <img src="{{ asset('template/') }}/img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                        </span>
                        <span class="position-relative">Get Ready<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-3"><img src="{{ asset('template/') }}/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                            <img src="{{ asset('template/') }}/img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                        </span>
                    </h1>
                    <h1 class="text-color-light font-weight-extra-bold text-12 line-height-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">
Selamat Datang di HK Endurance Challenge</h1>
                    <p class="text-10 text-color-light font-weight-light font-weight-bold opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">Endurance Sport to our People</p>
                </div>
            </div>
        </div>
        <a href="{{ asset('template/') }}/#main" class="slider-scroll-button position-absolute bottom-10 left-50pct transform3dx-n50" data-hash data-hash-offset="0" data-hash-offset-lg="80">Sroll To Bottom</a>
    </div>
</section>

<section id="apaituhkec" class="section section-scroll section-background overlay overlay-show overlay-op-7 border-0 m-0" data-section-scroll-title="SECTION 3" data-section-scroll-header-color="light" style="background-image: url({{ asset('template/') }}/img/apaituhkec.JPG); background-size: cover; background-position: center;">
    <div class="container h-100">
        <div class="row align-items-center h-100 py-5 py-md-0">
            <div class="col-md-6">
                <div class="row pb-3">
                    <div class="col">
                        <div class="overflow-hidden">
                            <div class="appear-animation" data-appear-animation="maskUp">
                                <span class="text-color-light text-10 line-height-3 opacity-6">Apakah itu ?</span>
                            </div>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <h2 class="font-weight-bold text-color-primary text-11 line-height-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">HK ENDURANCE CHALLENGE 123K: LOMBOK SERIES?</h2>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <p class="text-color-light text-5 line-height-8 opacity-5">
                                HK Endurance Challenge 123K: Lombok Series merupakan salah satu wujud kegiatan olahraga yang memadukan olahraga ketahanan fisik, pariwisata, lingkungan dan pendidikan.
                            </p>    
                        </div>
                        {{-- <a href="#" class="d-inline-flex align-items-center btn btn-with-arrow font-weight-bold text-color-light text-3 p-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                            GET STARTED NOW
                            <span class="d-inline-flex align-items-center bg-transparent box-shadow-none ms-3"><i class="fas fa-arrow-right text-color-light text-5"></i></span>
                        </a> --}}
                    </div>
                </div>
                {{-- <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <hr class="bg-light opacity-1 my-5">
                </div> --}}
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                        <p class="text-color-light text-justify text-5 line-height-8 opacity-5">
                            Setelah melewati tahun 2020 dengan tantangan pandemi yang berkepanjangan, membawa kita untuk terus berjuang melawan COVID-19 yang memberi dampak besar bagi semua orang, dan juga pada beberapa sektor terutama sektor pariwisata.
                        </p>
                        <p class="text-color-light text-justify text-5 line-height-8 opacity-5">
                            HK Endurance Challenge 123K: Lombok Series digagas sebagai eksibisi lomba olahraga ketahanan di Lombok dan berlangsung di Gili Air, Pantai Sire (Sengigi) dan Mandalika, Nusa Tenggara Barat, sebagai bentuk dukungan Hutama Karya terhadap Program 5 Destinasi Super Prioritas di Indonesia.
                        </p>
                        <p class="text-color-light text-justify text-5 line-height-8 opacity-5">
                            Sebagai bentuk kontribusi Hutama Karya untuk pembangunan daerah Nusa Tenggara Barat, kami menyelenggarakan HK Endurance Challenge 123K: Lombok Series. Ini adalah sebuah event eksibisi lomba olahraga ketahanan dengan peserta terbatas terdiri dari berenang, bersepeda dan berlari, yang dilakukan secara berkesinambungan dalam satu kesatuan waktu. 
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="mengapahkec" class="section section-scroll section-background overlay overlay-show overlay-op-7 border-0 m-0" data-section-scroll-title="SECTION 3" data-section-scroll-header-color="light" style="background-image: url({{ asset('template/') }}/img/mengapahkec.JPG); background-size: cover; background-position: center;">
    <div class="container h-100">
        <div class="row align-items-center h-100 py-5 py-md-0">
            <div class="col-md-6">
                <div class="row">
                    <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                        <p class="text-color-light text-justify text-5 line-height-8 opacity-5">
                            Menjalankan peran sebagai Badan Usaha Milik Negara (BUMN), Swasta dan Pemerintah dalam membangun dan mengembangkan potensi wisata di Lombok, Nusa Tenggara Barat khususnya di Gili Air, Pantai Sire (Senggigi) dan Mandalika sebagai salah satu dari 5 Destinasi Super Prioritas di Indonesia serta menyambut The Mandalika sebagai tuan rumah penyelenggaraan Moto GP 2022.
                        </p>
                        <p class="text-color-light text-justify text-5 line-height-8 opacity-5">
                            Tak hanya kegiatan olahraga ketahanan fisik, HK Endurance Challenge 123K: Lombok Series juga berkontribusi pada kemajuan pendidikan di Lombok dengan melakukan program CSR berupa bantuan biaya pembangunan institusi pendidikan kepada 6 sekolah di Lombok dan melakukan Beach Clean Up di Pulau Gili Air sebagai bentuk kepedulian terhadap lingkungan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row pb-3">
                    <div class="col">
                        <div class="overflow-hidden">
                            <div class="appear-animation" data-appear-animation="maskUp" align="right">
                                <span class="text-color-light text-10 line-height-3 opacity-6">Mengapa ?</span>
                            </div>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <h2 class="font-weight-bold text-color-primary text-11 line-height-4 mb-0 appear-animation" align="right" data-appear-animation="maskUp" data-appear-animation-delay="200">HK ENDURANCE CHALLENGE 123K: LOMBOK SERIES?</h2>
                        </div>
                        {{-- <a href="#" class="d-inline-flex align-items-center btn btn-with-arrow font-weight-bold text-color-light text-3 p-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                            GET STARTED NOW
                            <span class="d-inline-flex align-items-center bg-transparent box-shadow-none ms-3"><i class="fas fa-arrow-right text-color-light text-5"></i></span>
                        </a> --}}
                    </div>
                </div>
                {{-- <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <hr class="bg-light opacity-1 my-5">
              </div> --}}
            </div>
        </div>
    </div>
</section>



<div id="galleryandpublikasi" class="row text-center pt-5 pb-4 mt-5 mb-4">
    <div class="col-md-10 mx-md-auto">
        <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
            <span>Galery & Publikasi</span>
        </h1>
    </div>
</div>
<div class="container py-2">

    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
        <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Kegiatan HK Endurance</a></li>
        {{-- <li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
        <li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
        <li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
        <li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li> --}}
    </ul>

    <div class="">
        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

            {{-- @for ($i = 0; $i <= 10; $i++) --}}
                
            <div class="col-md-6 col-lg-4 isotope-item brands">
                <div class="portfolio-item">
                    <a href="portfolio-single-wide-slider.html">
                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="{{ asset("gallery/1.JPG") }}" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Presentation</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 isotope-item brands">
                <div class="portfolio-item">
                    <a href="portfolio-single-wide-slider.html">
                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="{{ asset("gallery/2.JPG") }}" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Presentation</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 isotope-item brands">
                <div class="portfolio-item">
                    <a href="portfolio-single-wide-slider.html">
                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="{{ asset("gallery/3.JPG") }}" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Presentation</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 isotope-item brands">
                <div class="portfolio-item">
                    <a href="portfolio-single-wide-slider.html">
                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="{{ asset("gallery/4.JPG") }}" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Presentation</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 isotope-item brands">
                <div class="portfolio-item">
                    <a href="portfolio-single-wide-slider.html">
                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="{{ asset("gallery/5.JPG") }}" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Presentation</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 isotope-item brands">
                <div class="portfolio-item">
                    <a href="portfolio-single-wide-slider.html">
                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="{{ asset("gallery/6.JPG") }}" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Presentation</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            
            
            {{-- @endfor --}}

        </div>
    </div>

</div>


<div id="sponsorandpartner" class="container">
    <div class="row text-center pt-4 mt-5">
        <div class="col">
            <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                <span>Sponsor & Partners</span>
            </h2>
            {{-- <h4 class="text-primary lead tall text-4">40,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4> --}}
        </div>
    </div>
    
    
    <div class="row text-center mt-5 pb-5 mb-5">
        <div class="" >
            <div>
                @foreach ($sponsors as $sponsor)
                    
                <img src="/sponsor/{{ $sponsor->image }}" alt="" style="height: 7rem;">
                @endforeach
                    {{-- <img src="{{ asset('image/' . $post->image) }}" alt=""> --}}
            </div>
            <div>
            </div>
        </div>
    </div>
   
</div>

<div id="3box" class="container">
    <div class="row text-center pt-4 mt-5">
        <div class="col">
            <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                <span>3 Box</span>
            </h2>
            {{-- <h4 class="text-primary lead tall text-4">40,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4> --}}
        </div>
    </div>

    <div class="container py-2">
        <iframe src="https://www.racetecresults.com/Results.aspx?CId=16412&RId=2218&EId=1" width="100%" height="1200"></iframe>
    </div>
    <br>
    <br>
</div>

</div>
@endsection