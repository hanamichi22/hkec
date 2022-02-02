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
    <div class="col-lg-12">
        <form action="{{ route('sponsors.store') }}" method="GET">
        @csrf
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>
                <h2 class="card-title">Data Search Filters </h2>

                <p class="card-subtitle"></p>
            </header>
            <div class="card-body">
                <div class="row form-group">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Search</label>
                            <input type="search" name="search" value="{{ request('search') }}" class="form-control" id="formGroupExampleInput" placeholder="e.g : Atlet Name, Country Name, Numcode PhoneCode, etc">
                        </div>
                    </div>
                </div>
            </div>
            <footer class="card-footer text-right">
                <button class="btn btn-success">Submit</button>
            </footer>
        </section>
    </div>
    </form>
</div>
<div class="col-lg-12">
    <br />
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <br />
</div>
<div class="col-lg-12">
    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
            </div>

            <h2 class="card-title"><i class="fa fa-user"></i> Master Data Sponsor & Partners</h2>
        </header>
        <div class="card-body">
            <a href="{{ route('sponsors.create') }}" class="pull-right btn btn-sm btn-success"><span class="fa fa-plus"></span> Tambah</a>
            <br>
            <br>
            <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Jenis</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Image</th>
                        <th class="text-center" width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sponsors as $sponsor)
                    <tr>
                        <td>{{ $sponsor->id }}</td>
                        <td>{{ $sponsor->name }}</td>
                        <td>{{ $sponsor->jenis }}</td>
                        <td>{{ $sponsor->kategori }}</td>
                        <td class="text-center"><img src="/sponsor/{{ $sponsor->image }}" width="200px"></td>
                        <td>
                            <form action="{{ route('sponsors.destroy',$sponsor->id) }}" method="POST">
                
                                {{-- <a class="btn btn-info" href="{{ route('sponsors.show',$sponsor->id) }}">Show</a> --}}
                
                                <a class="btn btn-primary" href="{{ route('sponsors.edit',$sponsor->id) }}">Edit</a>
                
                                @csrf
                                @method('DELETE')
                    
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
</div>
        
    
    {!! $sponsors->links() !!}
        
@endsection