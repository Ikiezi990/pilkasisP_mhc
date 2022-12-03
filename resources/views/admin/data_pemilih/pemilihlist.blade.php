@extends('admin.layoutAdmin')
@section('admin')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>

  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
       <table class="table ">
            <tr>
                <td>No</td>
                <td>Nama Pemilih</td>
                <td>NIS</td>
                <td>Opsi</td>
            </tr>
            @php
                $no = 1;
            @endphp

            @foreach ($pemilih as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nis }}</td>
                <td>
                    <div class="btn-group">
                        <form action="{{ url('/aaa') }}" method="get">
                            <button type="submit" class="btn border-danger show_confirm" id="show_confirm">
                                <i class="ri-delete-bin-6-line text-danger"></i>
                            </button>
                        </form>
                        <a href="" class="btn border-primary">
                            <i class="ri-edit-line text-primary"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
       </table>


         
      </div>
    </div>
  </section>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">

 

     $('.show_confirm').click(function(event) {

          var form =  $(this).closest("form");

          var name = $(this).data("name");

          event.preventDefault();

          swal({

              title: `Are you sure you want to delete this record?`,

              text: "If you delete this, it will be gone forever.",

              icon: "warning",

              buttons: true,

              dangerMode: true,

          })

          .then((willDelete) => {

            if (willDelete) {

              form.submit();

            }

          });

      });

  

</script>
@endsection