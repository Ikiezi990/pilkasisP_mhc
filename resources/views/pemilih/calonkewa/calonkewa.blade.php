@extends('pemilih.layoutPemilih')
@section('content')
    <div class="container">

    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <!-- calon pertama-->
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-6 col-md-6">
                            <img src="{{ asset('image/poto_calon_kewa.jfif') }}" class="card-img-top mb-2" alt="...">
                            <h6>Alvin</h6>
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="{{ asset('image/gunung.jfif') }}" class="card-img-top mb-2" alt="...">
                            <h6>Reva</h6>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-10 col-md-10">
                            <div class="card-body pb-0 ">
                                <h3><b>Visi dan Misi</b> <span class="badge bg-primary opacity-75 "> 1 </span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ad.....
                        </p>
                    </div>
                    <a class="btn btn-lg btn-outline-primary" href="{{ url('/admin/calon-kewa/detail-kewa') }}">Detail</a>
                </div>
            </div>
            <!-- akhir calon pertama -->
            <!-- calon pertama-->
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-6 col-md-6">
                            <img src="{{ asset('image/poto_calon_kewa.jfif') }}" class="card-img-top mb-2" alt="...">
                            <h6>Alvin</h6>
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="{{ asset('image/gunung.jfif') }}" class="card-img-top mb-2" alt="...">
                            <h6>Reva</h6>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-10 col-md-10">
                            <div class="card-body pb-0 ">
                                <h3><b>Visi dan Misi</b> <span class="badge bg-primary opacity-75 "> 2 </span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ad.....
                        </p>
                    </div>
                    <a class="btn btn-lg btn-outline-primary" href="{{ url('/admin/calon-kewa/detail-kewa') }}">Detail</a>
                </div>
            </div>
            <!-- akhir calon pertama -->
            <!-- calon pertama-->
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-6 col-md-6">
                            <img src="{{ asset('image/poto_calon_kewa.jfif') }}" class="card-img-top mb-2" alt="...">
                            <h6>Alvin</h6>
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="{{ asset('image/gunung.jfif') }}" class="card-img-top mb-2" alt="...">
                            <h6>Reva</h6>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-10 col-md-10">
                            <div class="card-body pb-0 ">
                                <h3><b>Visi dan Misi</b> <span class="badge bg-primary opacity-75 "> 3 </span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ad.....
                        </p>
                    </div>
                    <a class="btn btn-lg btn-outline-primary" href="{{ url('/admin/calon-kewa/detail-kewa') }}">Detail</a>
                </div>
            </div>
            <!-- akhir calon pertama -->
        </div>
    </section>


    </div>
@endsection
