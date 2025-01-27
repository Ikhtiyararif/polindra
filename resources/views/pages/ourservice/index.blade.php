@extends('layouts.default')
@section('page-title', 'Our Services')
@include('includes.nav')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <h1>Tabel Our Services </h1>
    <table id="def-table" class="auto">
        <thead>
            <tr>
                <th>Icon</th>
                <th>title</th>
                <th>Desc</th>
            </tr>
        </thead>

    <tbody>
        @foreach ($ourservices as $ourservice)
        <tr>
            <td>{!! $ourservice->icontext !!}</td>
            <td>{{ $ourservice->title }}</td>
            <td>{{ substr($ourservice->description, 0, 100). " ... " }}</td>

        </tr>
        @endforeach

    </tbody>


    </table>

</body>
</html>

@endsection

