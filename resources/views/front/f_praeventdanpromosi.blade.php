@extends('front.layouts.main_layout')

@section('main_content')
<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md  mb-0">
        <div class="container-fluid">
            <div class="row align-items-center">


                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">{{ $kategori_text }}</h2>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pra Event & Promosi</a></li>
                                <li class="active">{{ $kategori_text }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <div class="container py-2">

        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
            <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">{{ $kategori_text }}</a></li>
            {{-- <li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
            <li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
            <li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
            <li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li> --}}
        </ul>
        <br>
        <div class="">
            <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                
                <div class="col-md-6 col-lg-4 isotope-item brands">
                    <div class="portfolio-item">
                        <a href="#">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset("praeventdanpromosi/$folder_kategori_text/1.JPG") }}" class="img-fluid border-radius-0" alt="">
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
                        <a href="#">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset("praeventdanpromosi/$folder_kategori_text/2.JPG") }}" class="img-fluid border-radius-0" alt="">
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
                        <a href="#">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset("praeventdanpromosi/$folder_kategori_text/3.JPG") }}" class="img-fluid border-radius-0" alt="">
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
                        <a href="#">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset("praeventdanpromosi/$folder_kategori_text/4.JPG") }}" class="img-fluid border-radius-0" alt="">
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
                        <a href="#">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset("praeventdanpromosi/$folder_kategori_text/5.JPG") }}" class="img-fluid border-radius-0" alt="">
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
                
    
            </div>
        </div>
    
    </div>
    
    
    
    <br>
    <br>
    <br>
</div>
@endsection