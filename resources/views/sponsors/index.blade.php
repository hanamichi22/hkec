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
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="pull-right btn btn-sm btn-success" href="{{ route('sponsors.create') }}"><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Name</th>
            <th class="text-center">Jenis</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sponsors as $sponsor)
        <tr>
            <td>{{ ++$i }}</td>
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
    </table>
    
    {!! $sponsors->links() !!}
        
@endsection