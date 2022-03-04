@extends('layouts.admin.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title ?? '' }}</h4>
                    <div class="d-flex ml-3">
                        <a href="/add-masyarakat" class="btn btn-primary">Create Post</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                        <table class="table">
                            <thead class="text-black">
                                <th> # </th>
                                <th> Nik </th>
                                <th> Alamat </th>
                                <th> Gmail </th>
                                <th> Nama </th>
                                <th> Tanggal Lahir </th>
                                <th> Telepon </th>
                                <th> Action </th>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach($masyarakats as $masyarakat)
                                @php $i++ @endphp
                                <tr>
                                    <td> {{ $i }} </td>
                                    <td> {{ $masyarakat->nik }} </td>
                                    <td > {{ $masyarakat->alamat }} </td>
                                    <td > {{ $masyarakat->gmail }} </td>
                                    <td > {{ $masyarakat->nama }} </td>
                                    <td> {{ $masyarakat->tanggallahir }} </td>
                                    <td> {{ $masyarakat->telepon }} </td>
                                    <td>
                                    <form method="post" action="{{ route('masyarakat-destroy',$masyarakat->id) }}">


                                <a button type="button" class="btn btn-warning" href="{{ route('masyarakat-edit',$masyarakat->id) }}">Edit</button></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                        $(document).ready( function () {
                            $('#table_id').DataTable();
                        } );
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

