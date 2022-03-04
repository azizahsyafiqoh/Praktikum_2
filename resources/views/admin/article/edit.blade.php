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
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $article->title }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $article->description }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $article->slug }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Body</label>
                        <textarea class="form-control" name="body" rows="6">{{ $article->body }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile" name="image" value="{{ $article->picture}}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-3">
                      <button type="submit" class="btn btn-primary btn-round" herf="{{route('article-update', $article->id)}}">Simpan</button>
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
