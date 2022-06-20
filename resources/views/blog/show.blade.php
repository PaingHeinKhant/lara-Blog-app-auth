@extends('layouts.app')

<div class="container">
    <div class="row justify-content-center align-items-center my-5">
        <div class="col-lg-8 my-5">
            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="">
                        <h3 class="font-weight-bold">Post Detail</h3>
                        <h2 class="fs-6 text-black-50"> HOME / DETAIL</h2>
                    </div>
                    <div class="">
                        <a href="{{ route('blog.index') }}" class="mx-3 btn btn-primary btn-md">Home</a>
                        <form action="{{ route('blog.destroy',$blog->id) }}" class="d-inline-block" id="del-al" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-md btn-danger" >Delete Post</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title fw-bold">{{ $blog->title }}</h4>
                        <p class="font-weight-bold">{{ $blog->created_at->format('j M Y | g : i A ')}}</p>
                    </div>

                    <p class="card-text text-black-50">{{ $blog->description }} </p>
                    <div class="d-flex justify-content-between">
                        <p></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
