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
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $masyarakat->alamat }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Gmail</label>
                        <input type="text" class="form-control" name="gmail" placeholder="Gmail" value="{{ $masyarakat->gmail }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $masyarakat->nama }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tanggallahir" placeholder="TanggalLahir" value="{{ $masyarakat->tanggallahir }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="{{ $masyarakat->telepon }}">
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
