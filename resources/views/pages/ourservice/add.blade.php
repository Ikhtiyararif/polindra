@extends('layouts.default')
@section('page-title', 'Add Our Service')
@include('includes.nav')
@section('content')
    <div class="container pt-20">
        <div class="py-4">
            <h1>Add Our Service</h1>
            <form method="POST" action="{{ route('pages.ourservice.post') }}" enctype="multipart/form-data">
                @csrf
    
                <div class="mb-8">
                    <div class="col-md">
                        <div class="form-floating">
                            <input id="icontext" name="icontext" placeholder="icon text">
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
    
                <button class="btn btn-primary">Confirm</button>
            </form>
        </div>
    </div>
@endsection

