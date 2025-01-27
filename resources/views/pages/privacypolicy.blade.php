@extends('layouts.default')
@section('page-title', 'Privacy Policy')
@include('includes.nav')

@section('content')
    <div class="pt-20">
        <div class="container">
            <div class="py-4">
                @foreach ($privacypolicies as $privacypolicy)
                    <h3>{{ $privacypolicy->title }}</h3>
                    <p>{{ $privacypolicy->description }}</p>
                @endforeach
            </div>
        </div>
    </div>


    @include('includes.footer')
@endsection
