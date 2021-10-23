@extends('admin.master')

@section('title')
    Edit Article
@endsection

@section('content')

    <form action="/admin/article/{{$article->id}}" method="POST"  enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Writer Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name /  Anonymous" value="{{$article->name}}">
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="topic">Topic</label>
            <input type="text" class="form-control" name="topic" id="topic" placeholder="Topic of article" value="{{$article->topic}}">
            @error('topic')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="article">Article</label>
            <textarea name="article" class="form-control" cols="30" rows="10">{{$article->article}}</textarea>
            @error('article')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="picture">Upload Picture</label><br>
            <input type="file" name="picture" id="picture">
            @error('picture')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Edit Article</button>
        <a href="/admin/list-article" class="btn btn-outline-primary">Back</a>
    </form>
@endsection