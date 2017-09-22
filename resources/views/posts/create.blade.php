@extends('layouts.app')

@section('title', ' | Blog')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create a post
                </div>
                <div class="panel-body">
                    <form action="/posts" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="file" name="cover_image">
                        </div>

                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <input type="text" name="tags" id="tags" class="form-control" value="">
                        </div>

                        <input type="submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection