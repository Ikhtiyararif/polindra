@extends('layouts.default')
@section('page-title', $categories->name )
@include('includes.nav')

@section('content')
<div class="pt-20">
    <div class="text-center font-bold py-4">
        <h3 class="text-center">Property Di{{ $categories->name }}</h3>
    </div>

    <div class="px-8 md:px-8">
        <div class="row row-cols-2 row-cols-lg-4 pb-2">
            @foreach($properties as $property)
            <div class="item pb-8">
                <div class="card">
                    <a href="{{ url($property->category->name.'/'.$property->name) }}" class="text-black text-decoration-none">

                        <img src="{{ url(Storage::url($property->image)) }}" class="card-img-top" alt="...">
                        @if($property->recommended == '1')
                        <div class="card-img-overlay">
                            <p class="float-end card-title btn btn-success text-white">Recom</p>
                        </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $property->name }}</h5>
                            <p class="card-text text-black pb-2 text-8px">{{ $property->district->name }}, {{ $property->regency->name }}</p>

                            <div class="row text-center">
                                <ul class="col">
                                    <li class="d-flex justify-content-center"><x-fas-bed class="h-5 w-5" /></li>
                                    <li>{{ $property->kt }} KT</li>
                                </ul>
                                <ul class="col">
                                    <li class="d-flex justify-content-center"><x-bxs-bath class="h-5 w-5" /></li>
                                    <li>{{ $property->km }} KM</li>
                                </ul>
                                <ul class="col">
                                    <li class="d-flex justify-content-center"><x-fas-home class="h-5 w-5" /></li>
                                    <li>{{ $property->lb }}M<sup>2</sup></li>
                                </ul>
                                <ul class="col">
                                    <li class="d-flex justify-content-center"><x-ri-ruler-2-fill class="h-5 w-5" /></li>
                                    <li>{{ $property->lt }}M<sup>2</sup></li>
                                </ul>
                            </div>

                            <div class="px-28">
                                <h6 class="card-title text-center text-white py-1.5 bg-primary rounded-full">Rp {{ $property->price }}</h6>
                            </div>

                        </div>

                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('includes.footer')
@endsection