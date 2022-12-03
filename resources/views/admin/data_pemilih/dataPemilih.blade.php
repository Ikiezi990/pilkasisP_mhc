@extends('admin.layoutAdmin')
@section('admin')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">


            <div class="col-lg-12">
                <div class="row">
                    @foreach ($kelas as $item)
                        {{-- card awal --}}
                        <div class="col-xxl-4 col-6">
                            <div class="card info-card sales-card">
                                <div class="filter">
                                    {{-- <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a> --}}
                                    {{-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul> --}}
                                </div>

                                <div class="card-body">
                                    {{-- kelas --}}
                                    <div class="row">
                                        <div class="col-10">
                                            <h5 class="btn"> <span> {{ $item->nama_kelas }}</span></h5>
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-sm border" href="/pemilih/list/{{ $item->id }}">
                                              <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                            
                                            
                                        </div>
                                        <div class="ps-3">
                                            {{-- jumlah yang sudah memilih --}}
                                            <h6>
                                                @php
                                                    $jumlah_pemilih = \App\Models\Pemilih::where('kelas_id', $item->id)->count();
                                                @endphp
                                                {{ $jumlah_pemilih }}
                                            </h6>
                                            <span class="text-success small pt-1 fw-bold">0</span> <span
                                                class="text-muted small pt-2 ps-1">Jumlah pemilih</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- card akhir --}}
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
