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
               <form action="/store-masyarakat" method="{{ $method }}" enctype="multipart/form-data">
                   @csrf
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nik</label>
                        <input type="text" class="form-control" name="nik" placeholder="Nik">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Gmail</label>
                        <input type="text" class="form-control" name="gmail" placeholder="Gmail">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tanggallahir" placeholder="TanggalLahir">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" name="telepon" placeholder="Telepon">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-3">
                      <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                    </div>
                  </div>
               </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
