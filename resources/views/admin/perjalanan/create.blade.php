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
               <form action="/store-perjalanan" method="POST" >
                   @csrf
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" class="form-control" name="namalokasi" placeholder="Lokasi">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat Lokasi</label>
                        <input type="text" class="form-control" name="alamatlokasi" placeholder="Alamat_lokasi">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Suhu Tubuh</label>
                        <input type="text" class="form-control" name="suhutubuh" placeholder="SuhuTubuh">
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
