@extends('layouts.default')
@section('page-title', 'Add Our Leadership')
@include('includes.nav')
@section('content')
    <div class="container pt-20">
        <div class="py-4">
            <h1>Add Our Leadership</h1>
            <form method="POST" action="{{ route('pages.ourleadership.post') }}" enctype="multipart/form-data">
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
                            <input id="name" name="name" placeholder="name">
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <div class="col-md">
                        <div class="form-floating">
                            <input id="email" name="email" placeholder="email">
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <div class="col-md">
                        <div class="form-floating">
                            <input id="position" name="position" placeholder="position">
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
    
                <button class="btn btn-primary">Confirm</button>
            </form>
        </div>
    </div>
@endsection