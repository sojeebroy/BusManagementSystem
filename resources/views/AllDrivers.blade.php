@extends('layouts.app2')
@section('header')
AllDrivers
@endsection
@section('content')
<br><br><br>
<div class="content">
    <div class="w3-row-padding w3-margin-bottom">
    <div class="card">
    <div class="card-header text-center">
        <div class="card-body">
        <h3>Drivers List</h3>
        <table class="table table-striped table-bordered">
           <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th></th>
                <th>NId</th>
                <th></th>
            </tr>
           </thead>
           <tbody>
                @foreach($drivers as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->phone}}</td>
                    <td>{{$d->address}}</td>
                    <td>{{$d->nid}}</td>
                    <td>
                        <a href="editdriverprofile/{{$d->id}}" class="btn btn-success">Edit</a>
                        <a href="/deletedriver/{{$d->id}}" class="btn btn-danger">Delete</a>
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
