@extends('layouts.app2')
@section('header')
AdminDashboard
@endsection
@section('content')



<div class="content">
    <br><br><br>
    <h2>Dashboard</h2>
    <p>{{session()->get('email')}}</p>


    <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4><a href="/alldrivers">All Drivers</a></h4>
        </div>
        </div>

        <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4><a href="/allusers">All Users</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4><a href="/allbuses">All Buses</a></h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4><a href="/userregistration">create user</a></h4>
      </div>
    </div>

    </div>
</div>

@endsection
