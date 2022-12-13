@extends('layouts.app')
@section('header')
EditUserProfile
@endsection
@section('content')

<style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>
<br><br><br>
<div class="content">
    <div class="container">
    <div class="main-body">
    <form action="/allusers/{{$users->id}}" method="POST">
            @csrf
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <h2>Welcome</h2>
                    <hr>
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <hr>
                    <h2>{{ $users->name }}</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">

              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                      <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" id="form3Example1c" name="name" class="form-control" value="{{ $users->name }}"/>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                      <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" id="form3Example1c" name="email" class="form-control" value="{{ $users->email }}"/>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                      <span class="text-danger">
                        @error('phone')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" id="form3Example1c" name="phone" class="form-control" value="{{ $users->phone }}"/>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NID</h6>
                      <span class="text-danger">
                        @error('nid')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    <a class="btn btn-primary btn-lg " href="/allusers">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </form>
    </div>
    </div>
</div>
@endsection
