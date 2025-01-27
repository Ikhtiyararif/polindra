@extends('layouts.default')
@section('page-title', 'Newsroom')
@include('includes.nav')

@section('content')

    <div class="pt-20">
        <div class="py-4">
            <h4 class="text-center">Newsroom</h4>
            <p class="text-center">What's New?</p>
        </div>

        <div class="px-8 md:px-12 pb-4">
            {{-- <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($newsroom as $newsrooms)
                    <div class="col pb-8">
                        <div class="card">
                            <a href="{{ url('newsroom', $newsrooms->title) }}" class="text-decoration-none">

                                <img src="{{ url(Storage::url($newsrooms->image)) }}" class="card-img-top"
                                    alt="{{ $newsrooms->title }}">

                                <div class="card-img-overlay">
                                    @if ($newsrooms->trending == '1')
                                        <p class="card-title btn btn-danger text-white">Trending</p>
                                    @endif

                                </div>
                                <div class="card-body">
                                    <h4 class="card-title text-black">{{ $newsrooms->title }}</h4>
                                </div>
                                </a>
                        </div>
                        
                    </div>
                @endforeach
            </div> --}}

            <div class="row row-cols-1 row-cols-md-4 g-4 text-black">
                @foreach ($newsroom as $newsrooms)
                    <div class="col">
                        <div class="card shadow">
                            <div class="card">
                                <a href="{{ url('newsroom', $newsrooms->title) }}" class="text-decoration-none">

                                    <img src="{{ url(Storage::url($newsrooms->image)) }}" class="card-img-top"
                                        alt="{{ $newsrooms->title }}">

                                    <div class="card-img-overlay">
                                        @if ($newsrooms->trending == '1')
                                            <p class="card-title btn btn-danger text-white">Trending</p>
                                        @endif

                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-black">{{ $newsrooms->title }}</h5>
                                        <p class="card-text text-black">{{ substr( $newsrooms->description, 0, 100). " ... " }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
