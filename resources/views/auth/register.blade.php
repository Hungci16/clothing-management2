@extends('layouts.app1')

@section('content')
    <h2>Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        
        <button type="submit">Register</button>
    </form>
@endsection
