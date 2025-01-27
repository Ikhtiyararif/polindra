@extends('layouts.default')
@section('page-title', $ourleaderships->name)
@include('includes.nav')
@section('content')
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    {{-- <div class="card-img-overlay">
        <a href="{{ url()->previous() }}" class="text-decoration-none text-black font-bold pb-8"><i
                class="fa-solid fa-left-long fa-lg"></i> Go Back</a>
    </div> --}}
    <div class="pt-20">
        <div class="container">
            <img src="{{ url(Storage::url($ourleaderships->image)) }}" class="" alt="">
            <div class="container">
                <div class="py-4">
                    <h2>{{ $ourleaderships->name }}</h2>
                    <h5 class="pb-2">{{ $ourleaderships->position }}</h5>
                    <p>{{ $ourleaderships->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
