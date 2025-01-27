@extends('layouts.default')
@section('page-title', 'Our Leadership')
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
    <h1>Tabel Our Leadership </h1>
    <table id="def-table" class="auto">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>position</th>
                <th>image</th>
                <th>Desc</th>
            </tr>
        </thead>

    <tbody>
        @foreach ($ourleaderships as $ourleadership)
        <tr>
            <td>{{ $ourleadership->name }}</td>
            <td>{{ $ourleadership->email }}</td>
            <td>{{ $ourleadership->position }}</td>
            <td class="border border-gray-300 p-3"><a href="{{Storage::url($ourleadership->image)}}" target="_blank" rel="noopener noreferrer"><img src="{{ url(Storage::url($ourleadership->image)) }}" alt="" title="" class="w-16 mx-auto"></a></td>
            <td>{{ substr($ourleadership->description, 0, 100). " ... " }}</td>

        </tr>
        @endforeach

    </tbody>


    </table>

</body>
</html>

@endsection

