@extends('backend.layouts.main_layout')
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
    <div class="col">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title"><i class="fa fa-user"></i> Master Data Atlet</h2>
            </header>
            <div class="card-body">
                <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                    <thead>
                        <tr>
                            <th>Iso</th>
                            <th>Name</th>
                            <th>Nicename</th>
                            <th>Iso 3</th>
                            <th>Numcode</th>
                            <th>Phonecode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
@endsection