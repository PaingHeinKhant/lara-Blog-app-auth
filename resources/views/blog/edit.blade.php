@extends('layouts.app')
<div class="container-fluid">
    <div class="row align-items-center my-5">
        <div class="col-12 my-3">
            @section("title") Blog Update @stop
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
                                    <h2 class="fs-6 text-black-50"> HOME / EDIT</h2>
                                    <div class="">
                                        <a href="{{ route('blog.index') }}" class="mx-3 btn btn-primary btn-md">Home</a>
                                        <form action="{{ route('blog.destroy',$blog->id) }}" class="d-inline-block" id="del-al" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-md btn-danger" >Delete Post</button>
                                        </form>
                                    </div>

                                </div>

                            <form action="{{ route('blog.update',$blog->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="" class="form-label">Blog Title</label>
                                    <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" value="{{ old('title',$blog->title) }}" name="title">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Blog Description</label>
                                    <textarea type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" rows="10" name="description">{{ old('description',$blog->description) }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-lg btn-primary">Update Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection

        </div>
    </div>
</div>
