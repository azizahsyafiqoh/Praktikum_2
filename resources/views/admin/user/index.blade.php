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
                        <a href="/add-user" class="btn btn-primary">Create New</a>
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
                                <th> Name </th>
                                <th> Email </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach($users as $user)
                                @php $i++ @endphp
                                <tr>
                                    <td> {{ $i }} </td>
                                    <td> {{ $user->nik }} </td>
                                    <td > {{ $user->name }} </td>
                                    <td> {{ $user->email }} </td>
                                    <td>
                                    <form method="post" action="{{ route('user-destroy',$user->id) }}">


                                <a button type="button" class="btn btn-warning" href="{{ route('user-edit',$user->id) }}">Edit</button></a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data Petugas ?'); " value="delete" class="btn btn-danger">

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

