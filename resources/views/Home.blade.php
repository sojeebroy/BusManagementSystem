@extends('layouts.app')
@section('header')
Home
@endsection
@section('content')
<div >
        <br><br><br>
        <div class="text-center"> <h1>Welcome</h1></div>
        <br><br>
    <div class="content">
    <div class="w3-row-padding w3-margin-bottom">
    <div class="card">
    <div class="card-header text-center">
        <div class="card-body">
        <h3>Available Bus List</h3>
        <table class="table table-striped table-bordered">
           <thead>
            <tr>

                <th>Number</th>
                <th>Route</th>
                <th>Driver Name</th>
                <th>Seat Capacity</th>
                <th></th>

            </tr>
           </thead>
            <tr>
            <td>Projapoti P3123</td>
            <td>Mohamodpur>mirpur1>mirpur10>ecb>airport>abdullahpur</td>
            <td>Mr. Badhon</td>
            <td>40</td>
            <td>
            <a href="" class="btn btn-success">Buy Tickets</a>
            </td>

            </tr>
            <tr>
            <td>Poristhan P15523</td>
            <td>Mohamodpur>mirpur1>mirpur10>ecb>airport>abdullahpur</td>
            <td>Mr. Samim</td>
            <td>40</td>
            <td>
            <a href="" class="btn btn-success">Buy Tickets</a>
            </td>

            </tr>
            <tr>
            <td>Vuiyya bh9823</td>
            <td>Mohamodpur>mirpur1>mirpur10>ecb>airport>abdullahpur</td>
            <td>Mr. Sun</td>
            <td>40</td>
            <td>
            <a href="" class="btn btn-success">Buy Tickets</a>
            </td>

            </tr>
           <tbody>

           </tbody>
        </table>
        </div>
    </div>
</div>
    </div>
</div>


 </div>
@endsection
