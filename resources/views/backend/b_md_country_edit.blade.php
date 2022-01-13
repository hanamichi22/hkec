@extends('backend.layouts.main_layout')
@section('title_name', 'Form Master Data Country')
@section('application_title_name', 'HK Endurance 123')
@section('author_name', 'Divisi Sistem, IT & RisetTek')
@section('page-header')
<header class="page-header">
    <h2>Master Data Country</h2>

    <div class="right-wrapper text-right">
        <ol class="breadcrumbs">
            <li>
                <a href="/home">
                    <i class="bx bx-home-alt"></i>
                </a>
            </li>
            <li>
                <a >
                    Master Data Country
                </a>
            </li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
    </div>
</header>
@endsection

@section('page-content')
<div class="row">
    <div class="col-lg-6">
        <form id="form2" class="form-horizontal form-bordered" action="/mdcountry/edit" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $md_country->id }}" />
            <input type="hidden" name="photo_lama" value="{{ $md_country->photo }}" />
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                    </div>

                    <h2 class="card-title">Form Master Data Country</h2>

                    <p class="card-subtitle">
                    </p>
                </header>
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Country Name:</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" value="{{ $md_country->name }}" placeholder="E.g. : INDONESIA" class="form-control @error('name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Iso:</label>
                        <div class="col-sm-8">
                            <input type="text" name="iso" value="{{ $md_country->iso }}" placeholder="E.g : ID" class="form-control @error('iso') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('iso')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Nicename:</label>
                        <div class="col-sm-8">
                            <input type="text" name="nicename" value="{{ $md_country->nicename }}"placeholder="E.g : Indonesia" class="form-control @error('nicename') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('nicename')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Iso 3:</label>
                        <div class="col-sm-8">
                            <input type="text" name="iso3" value="{{ $md_country->iso3 }}" placeholder="E.g : IDN" class="form-control @error('iso 3') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('iso3')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Numcode:</label>
                        <div class="col-sm-8">
                            <input type="text" name="numcode" value="{{ $md_country->numcode }}" placeholder="E.g : 360" class="form-control @error('numcode') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('numcode')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Phonecode:</label>
                        <div class="col-sm-8">
                            <input type="text" name="phonecode" value="{{ $md_country->phonecode }}" placeholder="E.g : +62" class="form-control @error('phonecode') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('phonecode')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 control-label text-lg-right pt-2">Flag Image</label>
                        <div class="col-lg-5">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input">
                                        <i class="fas fa-file fileupload-exists"></i>
                                        <span class="fileupload-preview"></span>
                                    </div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileupload-exists">Change</span>
                                        <span class="fileupload-new">Select file</span>
                                        <input type="file" name="photo" class="@error('photo') is-invalid @enderror"/>
                                    </span>
                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                            <div style="font-size: 12px; color:red; padding:0.5% 0;">
                                @error('photo')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 text-center">
                            <img src="{{ url('/foto_country/'.$md_country->photo) }}" align="center" width="150" alt="">
                        </div>
                    </div>                    

                </div>
                <footer class="card-footer text-right">
                    <button class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </footer>
            </section>
        </form>
    </div>
</div>
@endsection