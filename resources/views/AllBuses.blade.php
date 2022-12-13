@extends('layouts.app2')
@section('header')
AllBuses
@endsection
@section('content')
<br><br><br>
<div class="content">
    <div class="w3-row-padding w3-margin-bottom">
    <div class="card">
    <div class="card-header text-center">
        <div class="card-body">
        <h3>Bus List</h3>
        <table class="table table-striped table-bordered">
           <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Route</th>
                <th>Driver ID</th>
                <th>Seat Capacity</th>
                <th></th>

            </tr>
           </thead>
           <tbody>
                @foreach($buses as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->number}}</td>
                    <td>{{$b->route}}</td>
                    <td>{{$b->driverId}}</td>
                    <td>{{$b->seatCapacity}}</td>
                    <td>
                        <a href="/editbus/{{$b->id}}" class="btn btn-success">Edit</a>
                        <a href="/deletebus/{{$b->id}}" class="btn btn-danger">Delete</a>
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
