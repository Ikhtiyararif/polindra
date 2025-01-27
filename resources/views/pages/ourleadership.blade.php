@extends('layouts.default')
@section('page-title', 'Our Leadership')
@include('includes.nav')

@section('content')
    <div class="pt-20">
        <div class="container">
            <div class="py-4">
                <h3>Our Leadership</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae quaerat, amet dolorum, totam
                    dignissimos, doloribus et autem esse libero at voluptates aut nihil. Voluptates voluptatum quibusdam
                    ullam, ipsum veniam facere ut iure a possimus iste rem fugiat! Eveniet error natus quisquam nostrum
                    commodi? Eaque odit tempora accusamus veniam similique magnam sequi suscipit quia pariatur ab
                    reiciendis, quam officiis fugiat laboriosam doloremque in, eos maiores molestiae natus nobis saepe,
                    facere ratione! Nostrum ratione provident repudiandae reprehenderit eius, qui modi, harum nesciunt dicta
                    amet reiciendis eveniet eligendi iusto sunt. Inventore atque molestiae, explicabo aliquam modi illum
                    corrupti asperiores, ratione, praesentium voluptas excepturi.</p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($ourleaderships as $ourleadership)
                    <div class="col pb-8">
                        <div class="card shadow product_data">
                            <div class="card">
                                <a href="{{ url('ourleadership', $ourleadership->name) }}" class="text-decoration-none">
                                    <img src="{{ url(Storage::url($ourleadership->image)) }}" class="card-img-top"
                                        alt="{{ $ourleadership->name }}">
                                </a>
                            </div>
                        </div>

                        <div class="text-center text-black">
                            <h5>{{ $ourleadership->name }}</h5>
                            <p class="text-black">{{ $ourleadership->position }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    @include('includes.footer')
@endsection


