@extends('admin.master')

@section('title')
    Add Article
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action="/admin/list-article" method="POST"  enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="name">Writer Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name /  Anonymous">
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="topic">Topic</label>
            <input type="text" class="form-control" name="topic" id="topic" placeholder="Topic of article">
            @error('topic')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="article">Article</label>
            <textarea name="article" class="form-control" cols="30" rows="10"></textarea>
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
        <button type="submit" class="btn btn-primary">Add Article</button>
        <a href="/admin/list-article" class="btn btn-outline-primary">Back</a>
    </form>
@endsection