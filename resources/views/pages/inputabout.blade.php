@extends('layouts.default')
@section('page-title', 'About')
@include('includes.nav')
@section('content')
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Image About</h1>
    <form id="add-abouts" method="POST" action="{{ route('pages.post.inputabout') }}" enctype="multipart/form-data"> 
    @csrf
    <input id="image" type="file" name="image" accept="image/png, image/jpeg, image/jpg">
<br>
    <input id="title" name="title" value="{{ old('title') }}" placeholder="title"/>
<br>
    <textarea id="description" type="text" name="description" placeholder="description">
    {{ old('description') }}
    </textarea>
    
    <button type="submit">Confirm</button>
    </form>
</body>
</html>
@endsection