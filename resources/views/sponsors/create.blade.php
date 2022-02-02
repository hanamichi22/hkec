@extends('backend.layouts.main_layout')
@section('title_name', 'Master Data Sponsor')
@section('application_title_name', 'HK Endurance 123')
@section('author_name', 'Divisi Sistem, IT & RisetTek')
@section('page-header')
<header class="page-header">
    <h2>Master Data Sponsor & Partners</h2>

    <div class="right-wrapper text-right">
        <ol class="breadcrumbs">
            <li>
                <a href="/home">
                    <i class="bx bx-home-alt"></i>
                </a>
            </li>
            <li>
                <a >
                    Master Data Sponsor & Partners
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
                <form action="{{ route('sponsors.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions"></div>
                        <h2 class="card-title">Form Master Data Sponsor & Partners</h2>
                        <p class="card-subtitle"></p>
                    </header>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-2">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-2">Jenis:</label>
                            <div class="col-sm-8">
                                <input type="text" name="jenis" class="form-control" placeholder="Jenis">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-2">Kategori:</label>
                            <div class="col-sm-8">
                                <input type="text" name="kategori" class="form-control" placeholder="Kategori">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-2">Image:</label>
                            <div class="col-sm-8">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fas fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileupload-exists">Change</span>
                                            <span class="fileupload-new">Select file</span>
                                            <input type="file" name="image" class="@error('image') is-invalid @enderror">
                                        </span>
                                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                                {{-- <input type="file" name="image" class="form-control" placeholder="image"> --}}
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
     

     

    
     {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis:</strong>
                <input type="text" name="jenis" class="form-control" placeholder="jenis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                <input type="text" name="kategori" class="form-control" placeholder="Kategori">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form> --}}
@endsection