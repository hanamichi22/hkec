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
    <div class="col">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title"><i class="fas fa-flag"></i> Master Data Country</h2>
            </header>
            <div class="card-body">
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
            </div>
        </section>
    </div>
</div>
@endsection