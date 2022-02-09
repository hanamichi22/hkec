@extends('backend.layouts.main_layout')
@section('title_name', 'Form Master Data Series')
@section('application_title_name', 'HK Endurance 123')
@section('author_name', 'Divisi Sistem, IT & RisetTek')
@section('page-header')
<header class="page-header">
    <h2>Master Data Series</h2>

    <div class="right-wrapper text-right">
        <ol class="breadcrumbs">
            <li>
                <a href="/home">
                    <i class="bx bx-home-alt"></i>
                </a>
            </li>
            <li>
                <a href="/mdseries">
                    Master Data Series
                </a>
            </li>
            <li>
                <a >
                    Tambah Master Data Series
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
        <form id="form2" class="form-horizontal form-bordered" action="/mdseries/add" method="post" enctype="multipart/form-data">
            @csrf
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                    </div>

                    <h2 class="card-title">Form Master Data Series</h2>

                    <p class="card-subtitle">
                    </p>
                </header>
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Seris Name:</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" placeholder="E.g. : HK Endurance Challange 123 Lombok Series" autocomplete="off" class="form-control @error('name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>               
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Location:</label>
                        <div class="col-sm-8">
                            <textarea name="location" rows="4" id="textareaAutosize" class="form-control" autocomplete="off" data-plugin-textarea-autosize @error('location') is-invalid @enderror"></textarea>
                            <div class="text-danger">
                                <small>@error('location')
                                    {{ $message }}
                                @enderror</small>
                            </div>
                        </div>
                    </div>               
                    <div class="form-group row">
                        <label class="col-lg-4 control-label text-lg-right pt-2">Tanggal Mulai</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                </span>
                                <input type="text" name="tanggal_mulai" data-plugin-datepicker data-plugin-options='{ "format": "yyyy-mm-dd" }' autocomplete="off"  class="form-control @error('tanggal_mulai') is-invalid @enderror">
                                <div class="invalid-feedback">
                                    @error('tanggal_mulai')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Tanggal Selesai:</label>
                        <div class="col-sm-8">
                            <input type="text" name="tanggal_selesai" data-plugin-datepicker data-plugin-options='{ "format": "yyyy-mm-dd" }' autocomplete="off" class="form-control @error('tanggal_selesai') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('tanggal_selesai')
                                    {{ $message }}
                                @enderror
                            </div>
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