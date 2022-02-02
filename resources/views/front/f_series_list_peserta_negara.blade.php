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
                                <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">List Peserta Negara</h2>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Series</a></li>
                                <li class="active">List Peserta Negara</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <div class="container py-4">
        <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th colspan="3" class="text-center">Negara</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peserta_negara as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->iso }}</td>
                    <td>{{ "-" }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <br>
    <br>
    <br>
</div>
@endsection