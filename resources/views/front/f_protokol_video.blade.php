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
                                <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Protokol Video</h2>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Protokol</a></li>
                                <li class="active">Protokol Video</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <div class="container py-4">
        <video  autoplay="" muted="" loop="" controls="" width="100%">
            <source src="{{ asset('protokol/protokol_video.MP4') }}" type="video/mp4">
        </video>
    </div>
    <div class="container py-4">

        <div class="row pb-5 pt-2">
            <div class="col-md-7 mb-4 mb-md-0">

                <div class="overflow-hidden mb-2">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-0 appear-animation" data-appear-animation="maskUp" data-plugin-options="{'accY': -150}">Project <strong class="font-weight-extra-bold">Description</strong></h2>
                </div>

                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>

                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                <hr class="solid my-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">

                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <strong class="text-uppercase text-1 me-3 text-dark float-start position-relative top-2">Share</strong>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900" data-plugin-options="{'accY': -150}">
                <h2 class="text-color-dark font-weight-normal text-5 mb-2">Project <strong class="font-weight-extra-bold">Details</strong></h2>
                <ul class="list list-icons list-primary list-borders text-2">
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong> Okler Themes</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> January 2021</li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">DESIGN</a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">BRAND</a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">WEBSITES</a></li>
                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong> <a href="#" target="_blank" class="text-dark">http://www.okler.net</a></li>
                </ul>
            </div>
        </div>

    </div>
    
</div>
@endsection