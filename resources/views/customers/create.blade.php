@extends('layouts.app')

@section('title', 'Register Customer')

@section('contents')
    <h3>Register Customer</h3>
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
