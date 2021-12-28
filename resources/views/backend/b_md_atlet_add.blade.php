@extends('backend.layouts.main_layout')
@section('title_name', 'Form Master Data Atlet')
@section('application_title_name', 'HK Endurance 123')
@section('author_name', 'Divisi Sistem, IT & RisetTek')
@section('page-header')
<header class="page-header">
    <h2>Master Data Atlet</h2>

    <div class="right-wrapper text-right">
        <ol class="breadcrumbs">
            <li>
                <a href="/home">
                    <i class="bx bx-home-alt"></i>
                </a>
            </li>
            <li>
                <a >
                    Master Data Atlet
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
        <form id="form2" class="form-horizontal form-bordered" action="/mdatlet/add" method="post" enctype="multipart/form-data">
            @csrf
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                    </div>

                    <h2 class="card-title">Form Master Data Atlet</h2>

                    <p class="card-subtitle">
                    </p>
                </header>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Atlet Name:</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" placeholder="type atlet name" class="form-control @error('name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Country:</label>
                        <div class="col-sm-8">
                            <select data-plugin-selectTwo class="form-control @error('id_country') is-invalid @enderror" name="id_country">
                                @foreach ($md_country as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('id_country')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Group:</label>
                        <div class="col-sm-8">
                            <input type="text" name="group" placeholder="Type in the origin of the athlete group" class="form-control @error('group') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('group')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Continent:</label>
                        <div class="col-sm-8">
                            <input type="text" name="continent" placeholder="type the origin of the athlete continent" class="form-control @error('continent') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('continent')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">City:</label>
                        <div class="col-sm-8">
                            <input type="text" name="city" placeholder="Type in the city of origin of the athlete" class="form-control @error('city') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label text-sm-right pt-2">Gender:</label>
                        <div class="col-sm-8">
                            <div class="radio-custom radio-success">
                                <input type="radio" id="radioExample2" name="gender" @error('gender') is-invalid @enderror value="Female">
                                <label for="radioExample2"><i class="el el-female"></i> Female</label>
                            </div>
                            <div class="radio-custom radio-success">
                                <input type="radio" id="radioExample2" name="gender" class="@error('gender') is-invalid @enderror" value="Male">
                                <label for="radioExample2"><i class="el el-male"></i> Male</label>
                            </div>
                            <div style="font-size: 12px; color:red; padding:0.5% 0;">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 control-label text-lg-right pt-2">Photo</label>
                        <div class="col-lg-8">
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