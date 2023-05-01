@extends('layouts.layout')

@section('content')
<div style="height: 100vh" class="container d-flex align-items-center justify-content-between">
        
    <div class="card" style="width: 20rem;">            
        <img src="{{asset('img/create-blog-img.jpeg')}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Create A Blog</h5>
          <p class="card-text">Let's go and change the world</p>
          <a href="{{route('create')}}" class="btn btn-primary w-100">Create</a>
        </div>
    </div>
    <div class="card" style="width: 20rem;">            
        <img src="{{asset('img/create-blog-img.jpeg')}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Update A Blog</h5>
          <p class="card-text">Update your blog posts</p>
          <a href="#" class="btn btn-warning w-100">Update</a>
        </div>
    </div>
    <div class="card" style="width: 20rem;">            
        <img src="{{asset('img/create-blog-img.jpeg')}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Delete A Blog</h5>
          <p class="card-text">Delete your blog posts</p>
          <a href="#" class="btn btn-danger w-100">Delete</a>
        </div>
    </div>
</div>
@endsection