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
                        <label>Lokasi</label>
                        <input type="text" class="form-control" name="namalokasi" placeholder="Lokasi" value="{{ $perjalanan->namalokasi }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat Lokasi</label>
                        <input type="text" class="form-control" name="alamatlokasi" placeholder="Alamat Lokasi" value="{{ $perjalanan->alamatlokasi }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Suhu Tubuh</label>
                        <input type="text" class="form-control" name="suhutubuh" placeholder="Suhu Tubuh" value="{{ $perjalanan->suhutubuh }}">
                      </div>
                    </div>
                  </div>
                  {{-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="{{ $pengguna->gender }}">{{ $pengguna->gender }}</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                  </div>
                  </div> --}}
                  {{-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $pengguna->address }}">
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Dob</label>
                        <input type="date" class="form-control" name="dob" placeholder="Dob" value="{{ $pengguna->dob }}">
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $pengguna->phone }}">
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="row">
                    <div class="update ml-3">
                        <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                    </div>
                  </div> --}}
                  <div class="row">
                    <div class="update ml-3">
                        <button type="submit" class="btn btn-primary btn-round">Simpan</button>
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
