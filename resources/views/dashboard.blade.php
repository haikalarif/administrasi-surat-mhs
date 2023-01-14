@extends('main')

@section('title', 'Dashboard')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-lg-12 mb-8">
            <div class="card border-bottom-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h2 class="text-center">Selamat Datang, {{ auth()->user()->name }}</h2 class="text-center">
                            </div>
                            {{-- <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card"
        style="background-image:url(minpro/img/campus.png); background-size:105% 110%; background-position:bottom;">
        <div class="card-body">
            @can('mhs')
                <div class="row justify-content-center py-4">
                    <div class="my-5 col-lg-6">
                        <a href="/ajuan" class="btn btn-warning btn-icon-split btn-block">
                            <span class="icon">
                                <i class="fas fa-envelope fa-2x text-gray-300"></i>
                            </span>
                            <span class="h3 text" align="middle">Pengajuan Surat</span>
                            <span class="icon">
                                <i class="fas fa-envelope fa-2x text-gray-300"></i>
                            </span>
                        </a>
                    </div>
                </div>
            @endcan
            @can('admin')
                <div class="row justify-content-center py-4">
                    <div class="my-5 col-lg-6">
                        <a href="/user" class="btn btn-warning btn-icon-split btn-block">
                            <span class="icon">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </span>
                            <span class="h3 text" align="middle">Data Mahasiswa</span>
                            <span class="icon">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </span>
                        </a>
                    </div>
                </div>
            @endcan
            <div class="row justify-content-center">
                <div class="my-0 col-lg-6 mb-5">
                    <a href="/surat" class="btn btn-primary btn-icon-split btn-block">
                        <span class="icon">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </span>
                        <span class="h3 text" align="middle">List Surat</span>
                        <span class="icon">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
