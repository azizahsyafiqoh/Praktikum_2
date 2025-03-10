@extends('layouts.admin.app')

@section('content')
   <div class="content">
        <div class="row">
          <div class="col-md-11">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">{{ $form_title }}</h5>
              </div>
              <div class="card-body">
               <form action="{{$route}}" method="POST" enctype="multipart/form-data">
                   @csrf
                   @method('PUT')
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nik</label>
                        <input type="text" class="form-control" name="nik" placeholder="Nik" value="{{ $masyarakat->nik }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="address" placeholder="Alamat" value="{{ $masyarakat->address }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="email" value="{{ $masyarakat->email }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $masyarakat->name }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="dob" placeholder="TanggalLahir" value="{{ $masyarakat->dob }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="phone" placeholder="Telepon" value="{{ $masyarakat->phone }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-3">
                      <button type="submit" class="btn btn-primary btn-round" herf="{{route('masyarakat-update', $masyarakat->id)}}">Simpan</button>
                    </div>
                  </div>
               </form>
              </div>
              <script>
                $(document).ready( function () {
                    $('#table_id').DataTable();
                } );
                </script>
            </div>
          </div>
        </div>
      </div>
@endsection
