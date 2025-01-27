@extends('layouts.default')
@section('page-title', 'Terms and Conditions')
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
    <h1>Tabel Terms and Conditions </h1>
    <table id="def-table" class="auto">
        <thead>
            <tr>
                <th>title</th>
                <th>Desc</th>
            </tr>
        </thead>

    <tbody>
        @foreach ($terms as $term)
        <tr>
            <td>{{ $term->title }}</td>
            <td>{{ substr($term->description, 0, 100). " ... " }}</td>

        </tr>
        @endforeach

    </tbody>


    </table>

</body>
</html>

@endsection

