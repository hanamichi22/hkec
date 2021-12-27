@extends('backend.layouts.main_layout')
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
                            <input type="text" name="search" class="form-control" id="formGroupExampleInput" placeholder="e.g : Country Name, Numcode PhoneCode, etc">
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

                <h2 class="card-title"><i class="fas fa-flag"></i> Master Data Country</h2>
            </header>
            <div class="card-body">
                <a href="mdcountry/add" class="pull-right btn btn-sm btn-success"><span class="fa fa-plus"></span> Tambah</a>
                <br>
                <br>
                <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Iso</th>
                            <th>Name</th>
                            <th>Nicename</th>
                            <th>Iso 3</th>
                            <th>Numcode</th>
                            <th>Phonecode</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($md_country as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->iso }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->nicename }}</td>
                            <td>{{ $item->iso3 }}</td>
                            <td>{{ $item->numcode }}</td>
                            <td>+{{ $item->phonecode }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $md_country->links("pagination::bootstrap-4"); }}
            </div>
        </section>
    </div>
</div>
@endsection