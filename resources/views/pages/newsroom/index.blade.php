@extends('layouts.default')
@section('page-title', 'Newsroom')
@include('includes.nav')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <h1>Tabel Newsroom </h1>
    <table id="def-table" class="auto">
        <thead>
            <tr>
                <th>title</th>
                <th>image</th>
                <th>Desc</th>
            </tr>
        </thead>

    <tbody>
        @foreach ($newsroom as $newsrooms)
        <tr>
            <td>{{ $newsrooms->title }}</td>
            <td class="border border-gray-300 p-3"><a href="{{Storage::url($newsrooms->image)}}" target="_blank" rel="noopener noreferrer"><img src="{{ url(Storage::url($newsrooms->image)) }}" alt="" title="" class="w-16 mx-auto"></a></td>
            <td>{{ substr($newsrooms->description, 0, 100). " ... " }}</td>

        </tr>
        @endforeach

    </tbody>


    </table>

</body>
</html>

@endsection

