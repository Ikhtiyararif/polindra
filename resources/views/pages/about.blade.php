@extends('layouts.default')
@section('page-title', 'About')
@include('includes.nav')


@section('content')

<div class="px-8 pb-12 pt-32 md:px-28 md:pb-16 text-black border-t border-white">


@foreach ($abouts as $key => $about)
    @if ($key % 2 == 0)
      <div class="grid md:grid-cols-2 md:gap-12 md:items-center pb-12 md:pb-20">
        <div>
          <h4 class="text-5xl font-light uppercase">{{ $about->title }}</h4>

          <p class="pb-8">
            {{ $about->description }}
          </p>
        </div>

        <div class="hidden md:grid">
          <img src="{{ url(Storage::url($about->image)) }}" alt="{{ $about->title }}" class=" rounded w-full h-full bg-cover"/>
        </div>
      </div>
    @else
      <div class="grid md:grid-cols-2 md:gap-12 md:items-center pb-12 md:pb-20">
        <div class="hidden md:grid">
          <img src="{{ url(Storage::url($about->image)) }}" alt="{{ $about->title }}" class=" rounded w-full h-full bg-cover"/>
        </div>
  
        <div>
          <h4 class="text-5xl font-light uppercase">{{ $about->title }}</h4>
  
          <p class="pb-8">
            {{ $about->description }}
          </p>
        </div>
      </div>
    @endif
@endforeach
</div>


@include('includes.footer')
@endsection

