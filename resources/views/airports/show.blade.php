@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Airport</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('airports.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $airport->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>City:</strong>
            {{ $airport->city }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Reference:</strong>
            {{ $airport->reference }}
        </div>
    </div>
</div>

<h1>Current Plane in the airport</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Reference</th>
        <th>Brand</th>
        <th>Capacity</th>
        <th>Airport ID</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($airport->flights as $flight)
    <tr>
        <td>{{ $flight->id }}</td>
        <td>{{ $flight->reference }}</td>
        <td>{{ $flight->brand }}</td>
        <td>{{ $flight->capacity }}</td>
        <td>{{ $flight->airport->name }}</td>
        <td><a class="btn btn-info" href="{{ route('flights.show',$flight->id) }}">Show</a></td>
    </tr>
    @endforeach
</table>
@endsection
