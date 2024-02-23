@extends('admin.parent')

@section('content')

<div class="card p-4">

    <form action="{{ route('vehicle.update', $vehicle->id) }}" method="post">
        @csrf
        @method('PUT')

        {{-- METHOD POST = CREATE --}}
        {{-- METHOD DELETE = DELETE --}}
        {{-- METHOD PUT = UPDATE --}}
        {{-- METHOD PATCH = UPDATE --}}

        <label for="">Name Vehicle</label>
        <input type="text" value="{{ $vehicle->name }}" class="form-control" name="name">

        <label for="">Color Vehicle</label>
        <input type="text" value="{{ $vehicle->color }}" class="form-control" name="color">

        <label for="">Tire Wheel Vehicle</label>
        <input type="text" value="{{ $vehicle->tire_wheel }}" class="form-control" name="tire_wheel">

        <label for="">Machine Vehicle</label>
        <input type="text" value="{{ $vehicle->machine }}" class="form-control" name="machine">

        <label for="">Price Vehicle</label>
        <input type="text" value="{{ $vehicle->price }}" class="form-control" name="price">

       <button type="submit" class="btn btn-warning mt-3">Update</button>

    </form>

</div>

@endsection