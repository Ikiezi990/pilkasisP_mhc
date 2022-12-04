@extends('admin.layoutAdmin')
@section('admin')
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/index') }}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('admin/pemilih') }}" class="text-decoration-none">Data pemilih</a></li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}" class="text-decoration-none">List Pemilih</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-12 col-md-12">
                <!-- Card with header and footer -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12 col-md-4 text-center">
                                <img src="{{ asset('image/poto_calon_kewa.jfif') }}" alt="">
                                @foreach ($pemilih as $item)
                                    <p class="card-title">{{ $item->nama }}</p>
                                @endforeach
                            </div>
                            <div class="col-12 col-md-6 ">
                                <h2 class="card-title pt-0">Profile</h2>
                                <Table class="table table-borderless">
                                    <tr >
                                        <td>Nama</td>
                                        <td>Iqbal herlambang</td>
                                    </tr>
                                    <tr>
                                        <td>status</td>
                                        <td>murid</td>
                                    </tr>
                                    <tr>
                                        <td>Jurusan</td>
                                        <td>RPL</td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td>12 rpl 3</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>iqbal@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>No HP</td>
                                        <td>123123123</td>
                                    </tr>
                                </Table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h4>Memilih : </h4>
                    </div>


                </div>
            </div>
        </div>




    </section>
@endsection
