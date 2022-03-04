@extends('layouts.admin.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title }}</h4>
                    <div class="d-flex ml-3">
                        <a href="/add-article" class="btn btn-primary">Create Post</a>
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
                                <th> Image </th>
                                <th> Title </th>
                                <th> Description </th>
                                <th> Slug </th>
                                <th> Body </th>
                                <th> Action </th>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach($articles as $article)
                                @php $i++ @endphp
                                <tr>
                                    <td> {{ $i }} </td>
                                    {{-- <td> {{ $article->image }} </td> --}}
                                    <td><img src="{{ asset('assets/article/'.$article->image) }}" style="max-height: 150px" alt="" class="img-thumbanail"></td>
                                    <td> {{ $article->title }} </td>
                                    <td > {{ $article->description }} </td>
                                    <td > {{ $article->slug }} </td>
                                    <td > {{ $article->body }} </td>
                                    <td>
                                    <form method="post" action="{{ route('article-destroy',$article->id) }}">


                                <a button type="button" class="btn btn-warning" href="{{ route('article-edit',$article->id) }}">Edit</button></a>
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

