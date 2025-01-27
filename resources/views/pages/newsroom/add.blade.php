@extends('layouts.default')
@section('page-title', 'Newsroom')
@include('includes.nav')
@section('content')
    <div class="container pt-20">
        <h1>Add Newsroom Contents</h1>
        <form method="POST" action="{{ route('pages.post.newsroom') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-8">
                <div class="col-md">
                    <div class="form-floating">
                        <input id="image" type="file" name="image" accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>
            </div>

            <div class="mb-8">
                <div class="col-md">
                    <div class="form-floating">
                        <input id="title" name="title" placeholder="title">
                    </div>
                </div>
            </div>

            <div class="mb-8">
                <div class="col-md">
                    <div class="form-floating">
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="description">
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="mb-8">
                <div class="col-md">
                    <div class="form-floating">
                        <input  type="number" id="trending" name="trending" placeholder="trending">
                    </div>
                </div>
            </div>

            <button class="btn btn-primary">Confirm</button>
        </form>
    </div>
@endsection

