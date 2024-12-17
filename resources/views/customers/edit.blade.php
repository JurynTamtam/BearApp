@extends('layouts.app')
  
@section('title', 'Edit Customer')
  
@section('contents')
  <div class="d-flex">
    <h3 class="mb-0">Edit Customer</h3>
    
  </div>
    <hr />
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="container">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="name" placeholder="Product Name"
          value="{{ $customer->name }}" >
          <label for="name">Customer Name</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="address" placeholder="Address"
          value="{{ $customer->address }}" >
          <label for="address">Address</label>
        </div>
        
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="contact" placeholder="Contact"
          value="{{ $customer->contact }}" >
          <label for="contact">Contact</label>
        </div>
        <a href="{{ route('customers') }}" class="btn btn-primary ms-auto">Back</a>
        <button type="submit" class="btn btn-warning">Update</button>
      </div>

    </form>
@endsection