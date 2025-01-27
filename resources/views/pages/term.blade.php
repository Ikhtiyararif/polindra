@extends('layouts.default')
@section('page-title', 'Terms and Conditions')
@include('includes.nav')

@section('content')
    <div class="pt-20">
        <div class="container">
            <div class="py-4">
                @foreach ($terms as $term)
                    <h3>{{ $term->title }}</h3>
                    <p>{{ $term->description }}</p>
                @endforeach
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
