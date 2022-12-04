@extends('admin.layoutAdmin')
@section('admin')
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/admin/calon-kewa') }}">Calon ketua & wakil ketua</a></li>
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
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6 col-md-6">
                                        <img src="{{ asset('image/poto_calon_kewa.jfif') }}" alt="" class="img-fluid rounded-circle border">
                                        <h4>Alvin</h4>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <img src="{{ asset('image/poto_calon_kewa.jfif') }}" alt="" class="img-fluid rounded-circle border">
                                        <h4>Reva</h4>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <h3 class="card-title pt-0">Visi & Misi</h3>
                                <h4 class="card-title p-0">Visi</h4>
                                <p class=" p-0"> Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore
                                    consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda.
                                    Non s Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam praesentium quod qui! Magnam provident temporibus, dolorum minima officia corporis. Aspernatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Misi</h4>
                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, modi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptatum non, tenetur quis fugiat unde molestiae eveniet possimus omnis fuga dolor recusandae architecto! A quas reprehenderit iusto aut in nam.</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, modi!</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, modi!</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-outline-primary">Edit</a>
                    </div>
                </div><!-- End Card with header and footer -->
            </div>
        </div>




    </section>
@endsection
