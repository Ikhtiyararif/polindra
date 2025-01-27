@extends('layouts.default')
@section('page-title', $properties->name)
{{-- @include('includes.nav') --}}
@include('includes.nav')

@section('content')
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
<div class="pt-20 pb-8">
<div class="pt-8 md:pt-8">
    <div class="px-8 py-8 md:px-8 md:py-8">
        <div class="px-8 md:px-8">
            <a href="{{ url()->previous() }}" class="text-decoration-none text-black font-bold mb-2"><i class="fa-solid fa-left-long fa-lg"></i> Go Back</a>
            <div class="card shadow product_data">
                <div class="card-body">

                    <div class="row">

                        <div class="col-md-4 border-right">
                            <img src="{{ url(Storage::url($properties->image)) }}" class="w-100" alt="">
                        </div>
                        <div class="col-md-8">
                            <h3>{{ $properties->name }}
                                @if($properties->recommended == '1')
                                <p class="float-end badge bg-success recommended_tag">Recommendation</p>
                                @endif
                            </h3>
                            <div>{{ $properties->district->name }}, {{ $properties->regency->name }}, {{ $properties->province->name }}</div>
                            <div class="">Property Type: {{ $properties->type->name }}</div>
                            <div class="font-bold">Di{{ $properties->category->name }}: Rp {{ $properties->price }}</div>
                            <hr>
                            <h4>Description</h4>
                            <p>{{ $properties->description }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="pb-10">
                        <h4 class="">Property Specifications</h4>
                        <div class="row justify-content-start">
                            <div class="col">
                                <b>Bedroom:</b> {{ $properties->kt }}
                            </div>
                            <div class="col">
                                <b>Bathroom:</b> {{ $properties->km }}
                            </div>
                            <div class="col">
                                <b>Building area:</b> {{ $properties->lb }}M<sup>2</sup>
                            </div>
                            <div class="col">
                                <b>Surface area:</b> {{ $properties->lt }}M<sup>2</sup>
                            </div>
                        </div>

                        <div class="row justify-content-start">
                            <div class="col">
                                <b>Room number:</b> {{ $properties->room_number }}
                            </div>
                            <div class="col">
                                <b>Floor:</b> {{ $properties->floor }}
                            </div>
                            <div class="col">
                                <b>Parking Lot:</b> {{ $properties->parking_lot }}
                            </div>
                            <div class="col">
                                <b>Facing:</b> {{ $properties->hadap }}
                            </div>
                        </div>
                    </div>

                    <div class="pb-10">
                        <h4 class="">Location</h4>
                        <div class=""><b>Address:</b> {{ $properties->address }}</div>
                        <div class="row justify-content-start">
                            <div class="col">
                                <b>Village:</b> {{ $properties->village->name }}
                            </div>
                            <div class="col">
                                <b>District:</b> {{ $properties->district->name }}
                            </div>
                            <div class="col">
                                <b>Regency:</b> {{ $properties->regency->name }}
                            </div>
                            <div class="col">
                                <b>Province:</b> {{ $properties->province->name }}
                            </div>
                        </div>

                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="" data-bs-toggle="modal" data-bs-target="#PurcaseReqModal"><button class="btn btn-primary me-md-2" type="button">Purcase Request</button></a>
                        <a href="https://wa.me/083856914166"><button class="btn btn-outline-primary" type="button">WhatsApp Contact</button></a>
                    </div>

                        
                    <form action="{{ route('pages.property.apply') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="modal fade" id="PurcaseReqModal" tabindex="-1" aria-labelledby="PurcaseReqModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-black" id="PurcaseReqModalLabel">Purcase Request for {{ $properties->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>


                                <div class="modal-body">
                                    <div class="pb-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="yourname@gmail.com">
                                    </div>
                                    <div class="pb-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="phone" placeholder="Your Name">
                                    </div>
                                    <div class="pb-6">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control" id="phone"
                                        name="phone" placeholder="08XX XXXX XXXX">
                                    </div>
                                    <div class="pb-6">
                                        <label for="attachment">Attachment</label>
                                        <input type="file" class="form-control" name="attachment" id="attachment" placeholder="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-primary" type="confirm">Send Purchase Request <i class="fa-regular fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('includes.footer')
{{-- @include('includes.footer') --}}
@endsection


