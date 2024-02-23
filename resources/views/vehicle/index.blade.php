@extends('admin.parent')

@section('content')

    <div class="card">

        <h1>Vehicle</h1>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('vehicle.create') }}" class="btn btn-success">
                Create Vehicle
            </a>
        </div>

        {{-- alert success --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <th>
                <tr class="text-center">
                    <td>No.</td>
                    <td>Name</td>
                    <td>Color</td>
                    <td>Tire Wheel</td>
                    <td>Machine</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </th>
            <tbody>
                @foreach ($vehicle as $row)
                <tr class="text-center">
                    <td>{{ $loop ->iteration}}</td>
                    <td>{{ $row ->name }}</td>
                    <td>{{ $row ->color }}</td>
                    <td>{{ $row ->tire_wheel }}</td>
                    <td>{{ $row ->machine }}</td>
                    <td>{{ $row ->price }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('vehicle.show', $row->id) }}" class="btn btn-info mr-2">Show</a>
                        <a href="{{ route('vehicle.edit', $row->id) }}" class="btn btn-warning mr-2">Update</a>
                        <form action="{{ route('vehicle.destroy', $row->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

@endsection