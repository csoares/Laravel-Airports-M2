@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Flight</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('airports.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Reference:</strong>
            {{ $flight->reference }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Brand:</strong>
            {{ $flight->brand }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Capacity:</strong>
            {{ $flight->capacity }}
        </div>
    </div>
</div>


<form action="{{ route('flights.update',$flight->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Airports:</strong>

                <select name="airport_id" id="cars">
                    @foreach ($airports as $airport )
                    <option value="{{$airport->id}}">{{ $airport->name}}</option>
                    @endforeach
                </select>


            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection