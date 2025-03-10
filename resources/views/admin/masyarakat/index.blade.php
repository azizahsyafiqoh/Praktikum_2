@extends('layouts.admin.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title ?? '' }}</h4>
                    @if(Auth::user()->role == 'Admin')
                    <div class="d-flex ml-3">
                        <a href="/add-masyarakat" class="btn btn-primary">Create New</a>
                    </div>
                    @endif
                    </div>

                </div>
                </div>
                </div>
                <div class="card-body">
                  <div>
                        <table id="table_id" class="table" style="width: 100%">
                            <thead>
                                <th> # </th>
                                <th> Nik </th>
                                <th> Nama </th>
                                <th> Alamat </th>
                                <th> Email </th>
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
                                    <td> {{ $masyarakat->name }} </td>
                                    <td> {{ $masyarakat->address }} </td>
                                    <td> {{ $masyarakat->email }} </td>
                                    <td> {{ $masyarakat->name }} </td>
                                    <td> {{ $masyarakat->dob }} </td>
                                    <td> {{ $masyarakat->phone }} </td>
                                    <td>
                                    <form method="post" action="{{ route('masyarakat-destroy', $masyarakat->id) }}">



                           @csrf
                                @method('DELETE')
                                <input type="submit" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data Pengguna ?'); " value="delete" class="btn btn-danger">
                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
    $('#table_id').DataTable(
        {
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ],
        "columnDefs": [
            { width: 200, targets: 1 },
            { width: 250, targets: 2 },
            { width: 200, targets: 4 }
            ],
            "fixedColumns": true,
        "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Indonesian.json"
            }
    },
    );
} );
</script>
@endsection
