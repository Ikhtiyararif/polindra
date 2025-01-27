@extends('layouts.default')
@section('page-title', 'Privacy Policy')
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
    <h1>Tabel Privacy Policy </h1>
    <table id="def-table" class="auto">
        <thead>
            <tr>
                <th>title</th>
                <th>Desc</th>
            </tr>
        </thead>

    <tbody>
        @foreach ($privacypolicies as $privacypolicy)
        <tr>
            <td>{{ $privacypolicy->title }}</td>
            <td>{{ substr($privacypolicy->description, 0, 100). " ... " }}</td>

        </tr>
        @endforeach

    </tbody>


    </table>

</body>
</html>

@endsection

