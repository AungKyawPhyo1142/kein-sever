@extends('layouts.layout')

@section('content')
<div style="max-height: 100vh;" class="content">
    <div class="row">
      <div class="col-md-10 offset-1">
          <div class="card">
              <div class="card-header">
                  <h2 class="card-title">Create A Post</h2>
              </div>
              <div class="card-body">
                  <form action="{{route('createBlog')}}" method="post">
                      @csrf
                      <div class="row mb-3">
                          <div class="col pr-3">
                              <div class="form-group">
                                  <input type="text" name="blogTitle" id="blogTitle" class="form-control" placeholder="Blog Title">
                                  @error('blogTitle')
                                      <small class="text-danger">
                                          {{$message}}
                                      </small>
                                  @enderror
                              </div>
                          </div>
                      </div>
  
                      <div class="row mb-3">
                          <div class="col pr-3">
                            <div class="form-group">
                                <input type="text" name="blogCategory" id="blogCategory" class="form-control" placeholder="Blog Category">
                                @error('blogCategory')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror
                            </div>                                
                          </div>
                      </div>


                      <div class="row mb-3">
                          <div class="col pr-3">
                            <div class="form-group">
                                <input type="text" name="blogDescription" id="blogDescription" class="form-control" placeholder="Blog Description">
                                @error('blogDescription')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror
                            </div>                                
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col pr-3">
                            <div class="form-group">
                                <label for="blogContent">Blog Content</label>
                                <textarea name="blogContent" rows="7" cols="20" id="blogContent" class="form-control"></textarea>
                                @error('blogContent')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror
                            </div>                                
                          </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col pr-3">
                          <div class="form-group">
                            <label for="blogImage">Blog Image</label>
                              <input type="file" name="blogImage" id="blogImage" class="form-control">
                              @error('blogImage')
                                  <small class="text-danger">
                                      {{$message}}
                                  </small>
                              @enderror
                          </div>                                
                        </div>
                    </div>

  

                      <div class="row mb-3">
                          <div class="col pr-3">
                              <div class="form-group d-flex justify-content-between">
                                  <a href="{{route('home')}}" class="btn btn-secondary">
                                      <i class="now-ui-icons arrows-1_minimal-left"></i>
                                      Back
                                  </a>
                                  <button class="btn btn-primary">
                                      <i class="now-ui-icons ui-1_simple-add"></i>
                                      Submit</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          @if (session('createSuccess'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session('createSuccess')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
  
          @endif
      </div>
    </div>
  </div>
  
@endsection