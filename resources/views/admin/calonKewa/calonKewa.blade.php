@extends('admin.layoutAdmin')
@section('admin')
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav class="d-flex justify-content-between">
            <div>
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </div>

            {{-- modal tambah data --}}
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="ri-add-line"></i> Tambah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Formulir Calon Ketua & Wakil Ketua
                                    Osis</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="" method="post">
                                <div class="modal-body">
                                    {{-- ketua --}}
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Ketua">
                                        <label for="floatingInput">Ketua</label>
                                    </div>

                                    {{-- wakil ketua --}}
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Wakil ketua">
                                        <label for="floatingInput">Wakil Ketua</label>
                                    </div>

                                    {{-- visi --}}
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Visi" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Visi</label>
                                    </div>

                                    {{-- Misi --}}
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Misi" id="floatingTextarea2" style="height: 300px"></textarea>
                                        <label for="floatingTextarea2">Misi</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button> --}}
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- akhir modal --}}
        </nav>
    </div>

    <section class="section dashboard">
        <Table class="table">
            <tr class="table-primary">
                <th>Paslon</th>
                <th>Ketua</th>
                <th>Wakil ketua</th>
                <th>Opsi</th>
            </tr>

            {{-- baris pertama --}}
            <tr>
                <th>1</th>
                <td class="">
                    <div class="d-flex">
                        <img src="{{ asset('image/poto_calon_kewa.jfif') }}" alt="" width="100">
                        <p>Alvin</p>
                    </div>
                </td>
                <td>
                    <div class="d-flex">
                        <img src="{{ asset('image/poto_calon_kewa.jfif') }}" alt="" width="100">
                        <p>Reva</p>
                    </div>
                </td>
                <td>
                    <a href="" class="btn btn-danger opacity-75"><i class="ri-delete-bin-6-line"></i></a>
                    <a href="{{ url('/admin/calon-kewa/detail-kewa') }}" class="btn btn-outline-primary"><i
                            class="ri-information-line"></i> Detail</a>
                </td>
            </tr>
            {{-- akhir baris pertama --}}

        </Table>
    </section>
@endsection
