@extends('admin.parent')

@section('content')

<div class="card p-4 bg-black">

    <label for="">Name Category</label>
    <input type="text" value="{{ $vehicle->name }}" class="form-control" disabled>

    <label for="">ID Category</label>
    <input type="text" value="{{ $vehicle->id }}" class="form-control" disabled>

    <button class="btn btn-outline-dark mt-3"> <a href="{{ route('vehicle.index', $vehicle->id) }}">Back To Index</a></button>
</div>

@endsection