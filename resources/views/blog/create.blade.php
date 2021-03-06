@extends('layouts.app')
<div class="container-fluid">
    <div class="row align-items-center my-5">
        <div class="col-12 my-2">
            @section("content")
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                <div class="d-flex justify-content-between align-items-center my-4">
                                    <h2 class="fs-6 text-black-50"> HOME / CREATE</h2>
                                    <a class="btn btn-primary" href="{{ route('blog.index') }}">Home</a>
                                </div>

                            <form action="{{ route('blog.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Blog Title</label>
                                    <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Blog Description</label>
                                    <textarea type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" rows="10" name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-lg btn-primary">Add Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection

        </div>
    </div>
</div>
