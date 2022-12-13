@extends('layouts.app2')
@section('header')
BusRegistration
@endsection
@section('content')
<h2>Registration form page</h2>


<section class="vh-150" style="background-color: #eee;">
<br><br><br><br>
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create a Bus</p>

                <form action="busregistration" method="POST" class="mx-1 mx-md-4">
                @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="number" class="form-control" value="{{old('number')}}"/>
                      <label class="form-label" for="form3Example1c">Bus Number </label>
                      <span class="text-danger">
                        @error('number')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="route" id="form3Example4c" name="route" class="form-control" value="{{old('route')}}" />
                      <label class="form-label" for="form3Example4c">Route</label>
                      <span class="text-danger">
                        @error('route')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="driverid" class="form-control" value="{{old('driverid')}}" />
                      <label class="form-label" for="form3Example1c"> Driver Id</label>
                      <span class="text-danger">
                        @error('driverid')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="seatcapacity" class="form-control" value="{{old('seatcapacity')}}" />
                      <label class="form-label" for="form3Example1c"> Seat Capacity</label>
                      <span class="text-danger">
                        @error('seatcapacity')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                  </div>



                <button type="submit" class="btn btn-primary btn-lg">Register</button>

                <button type="button" class="btn btn-success btn-lg"><a href="home">Back</a></button>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection
