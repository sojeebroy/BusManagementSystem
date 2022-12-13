@extends('layouts.app2')
@section('header')
AllUsers
@endsection
@section('content')
<br><br><br>
<div class="content">
    <div class="w3-row-padding w3-margin-bottom">
    <div class="card">
    <div class="card-header text-center">
        <div class="card-body">
        <h3>Users List</h3>
        <table class="table table-striped table-bordered">
           <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th></th>
            </tr>
           </thead>
           <tbody>
                @foreach($users as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->phone}}</td>
                    <td>
                        <a href="/edituserprofile/{{$u->id}}" class="btn btn-success">Edit</a>
                        <a href="/deleteuser/{{$u->id}}" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                @endforeach
           </tbody>
        </table>
        </div>
    </div>
</div>
    </div>
</div>

@endsection
