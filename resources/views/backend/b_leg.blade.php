@extends('backend.layouts.main_layout')
@section('title_name', 'Tabel Data Leg')
@section('application_title_name', 'HK Endurance 123')
@section('author_name', 'Divisi Sistem, IT & Riset Teknologi')
@section('page-header')
<header class="page-header">
    <h2>Table Data Leg</h2>

    <div class="right-wrapper text-right">
        <ol class="breadcrumbs">
            <li>
                <a href="/home">
                    <i class="bx bx-home-alt"></i>
                </a>
            </li>
            <li>
                <a >
                    Table Data Leg
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
        <form action="?" method="GET">
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
                            <input type="text" name="search" class="form-control" id="formGroupExampleInput" placeholder="e.g : Leg Name, Seies Name, etc">
                        </div>
                    </div>
                </div>
            </div>
            <footer class="card-footer text-right">
                <button class="btn btn-success">Submit</button>
            </footer>
        </section>
        </form>
    </div>

    <div class="col-lg-12">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title"><i class="fas fa-list"></i> Table Data Leg</h2>
            </header>
            <div class="card-body">
                <a href="bleg/add" class="pull-right btn btn-sm btn-success"><span class="fa fa-plus"></span> Tambah</a>
                <br>
                <br>
                <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($BLeg as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->series_name }}</td>
                            <td class="text-center">
                                @if ($item->photo != "")
                                    <img src='{{ asset("leg/$item->photo") }}' width="100" height="50" alt="">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group flex-wrap">
                                    <a href="/bleg/edit/{{ $item->id }}" class="btn btn-sm btn-warning"><i class="el el-pencil"></i></a>
                                    {{-- <a href="/mdatlet/delete/{{ $item->id }}" class="btn btn-sm btn-danger"><i class="el el-trash"></i></a> --}}
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $item->id }}">
                                    <span class="el el-trash"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $BLeg->links("pagination::bootstrap-4"); }}
            </div>
        </section>
    </div>
</div>

@foreach ($BLeg as $item)
  <div class="modal fade" id="delete{{ $item->id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Confirmation</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah {{ $item->name }} akan dihapus?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a href="/bleg/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  @endforeach

@endsection