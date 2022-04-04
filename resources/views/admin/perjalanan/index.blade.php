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
                        <a href="/add-perjalanan" class="btn btn-primary">Create New</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="card-body">
                  <div>
                        <table id="table_id" class="display" style="width: 100%">
                            <thead>
                                <tr>
                                <th> # </th>
                                <th> Nik </th>
                                <th> Nama </th>
                                <th> Tanggal </th>
                                <th> Waktu </th>
                                <th> Lokasi </th>
                                <th> Suhu Tubuh </th>
                                <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach($perjalanans as $caper)
                                @php $i++ @endphp
                                <tr>
                                    <td> {{ $i }} </td>
                                    <td> {{ $caper->user->nik }} </td>
                                    <td> {{ $caper->user->name }} </td>
                                    <td> {{ $caper->created_at->format('d M Y') }} </td>
                                    <td> {{ $caper->created_at->format('H:i')  }} </td>
                                    <td> {{ $caper->namalokasi}} </td>
                                    <td> {{ $caper->suhutubuh }} &#8451; </td>
                                    <td>
                                    <form method="post" action="{{ route('perjalanan-destroy',$caper->id) }}">


                                <a button type="button" class="btn btn-warning" href="{{ route('perjalanan-edit',$caper->id) }}">Edit</button></a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data Perjalanan ?'); " value="delete" class="btn btn-danger">

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
