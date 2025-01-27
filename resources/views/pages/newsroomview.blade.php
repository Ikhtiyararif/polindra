@extends('layouts.default')
@section('page-title', $newsroom->title)
@include('includes.nav')
@section('content')
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <div class="pt-20">
        <div class="container">
            <div class="py-4">
                {{-- <a href="{{ url()->previous() }}" class="text-decoration-none text-black font-bold pb-8"><i class="fa-solid fa-left-long fa-lg"></i> Go Back</a> --}}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="pb-2">
                            <img src="{{ url(Storage::url($newsroom->image)) }}" class="" alt="">
                        </div>
                        <div class="pb-2">
                            <h3>{{ $newsroom->title }}</h3>
                        </div>
                        <div class="pb-2"><i class="fa-regular fa-calendar"></i>
                            {{ $newsroom->created_at->format('Y-m-d') }}
                        </div>
                        <div class="pb-8">
                            {{ $newsroom->description }}
                        </div>
                        <div class="card shadow product_data">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <h4 class="text-center">Leave a comment or feedback</h4>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                                placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Comment or
                                                Feedback</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-secondary" type="button">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">

                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
