@extends('admin.parent')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Garge</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card p-4">
    <h1 class="mb-3">Your Vehicle</h1>

    <label for="">Vehicle Name</label>
    <input type="text" value="{{ $vehicle->name }}" class="form-control" disabled>
    
    <label for="">Vehicle Color</label>
    <input type="text" value="{{ $vehicle->color }}" class="form-control" disabled>

    <label for="">Vehicle Tire Wheel</label>
    <input type="text" value="{{ $vehicle->tire_wheel }}" class="form-control" disabled>

    <label for="">Vehicle Machine</label>
    <input type="text" value="{{ $vehicle->machine }}" class="form-control" disabled>

    <label for="">Vehicle Price</label>
    <input type="text" value="{{ $vehicle->price }}" class="form-control" disabled>

    <div class="container d-flex justify-content-end mt-3">
        <a href="{{ route('vehicle.index') }}" class="btn btn-success">Go to Garage</a>
    </div>
</div>
@endsection