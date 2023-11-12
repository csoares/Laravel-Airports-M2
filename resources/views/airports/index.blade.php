@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Airports</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('airports.create') }}"> Create New airport</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>City</th>
        <th>Reference</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($airports as $airport)
    <tr>
        <td>{{ $airport->id }}</td>
        <td>{{ $airport->name }}</td>
        <td>{{ $airport->city }}</td>
        <td>{{ $airport->reference }}</td>
        <td>
            <form action="{{ route('airports.destroy',$airport->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('airports.show',$airport->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('airports.edit',$airport->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>



<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Reference</th>
        <th>Brand</th>
        <th>Capacity</th>
        <th>Airport ID</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($flights as $flight)
    <tr>
        <td>{{ $flight->id }}</td>
        <td>{{ $flight->reference }}</td>
        <td>{{ $flight->brand }}</td>
        <td>{{ $flight->capacity }}</td>
        <td>{{ $flight->airport_id }}</td>
        <td>
            <form action="{{ route('flights.destroy',$flight->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('flights.show',$flight->id) }}">Show</a>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>



@endsection