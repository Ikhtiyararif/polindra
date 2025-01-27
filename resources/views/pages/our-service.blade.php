@extends('layouts.default')
@section('page-title', 'Our Services')
@include('includes.nav')
@section('content')
    <div class="pt-20">
        <div class="px-8 md:px-12">
            <div class="py-4">
                <h4>Our Services</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quaerat nam laudantium commodi totam
                    sequi, illo non eum voluptatum ab temporibus provident, suscipit maiores culpa libero? Harum recusandae
                    perspiciatis, enim assumenda consequatur ab esse sequi asperiores veritatis quibusdam aliquid
                    exercitationem praesentium accusantium obcaecati quasi pariatur quidem eligendi numquam maxime soluta
                    nisi natus quo ratione? Aliquid ullam veniam iste sunt cupiditate unde asperiores, voluptates, impedit
                    error eius eveniet excepturi velit deserunt totam ratione sapiente architecto perferendis expedita harum
                    soluta. Necessitatibus repellendus optio, eum beatae ullam aliquam enim, voluptatibus pariatur impedit
                    velit repudiandae aliquid eveniet error molestiae sed. Consequatur corporis qui libero.</p>
                <hr>
                {{-- @foreach ($ourservices as $ourservice)
                    <h4>{{ $ourservice->title }}</h4>
                    <p>{{ $ourservice->description }}</p>
                @endforeach --}}
                <div class="row row-cols-1 row-cols-md-4 g-4 text-black">
                @foreach ($ourservices as $ourservice)
                        <div class="col">
                            <div class="card shadow">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="pb-2 fa-3x">{!! $ourservice->icontext !!}</div>
                                        <h5 class="card-title">{{ $ourservice->title }}</h5>
                                        <p class="card-text text-black">{{ $ourservice->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
