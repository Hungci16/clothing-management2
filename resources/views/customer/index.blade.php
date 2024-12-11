@extends('layouts.app')

@section('content')
    <div class="bg-white p-5 rounded shadow-sm">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Customer List</h1>
            <a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>
        </div>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $cus)
                    <tr>
                        <td>{{ $cus->id }}</td>
                        <td>{{ $cus->name }}</td>
                        <td>{{ $cus->email }}</td>
                        <td>{{ $cus->phone }}</td>
                        <td>{{ $cus->address }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('customer.edit', ['id' => $cus->id]) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('customer.delete', ['id' => $cus->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No customers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection