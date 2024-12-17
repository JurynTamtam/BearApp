@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
  <div class="d-flex">
    <h3 class="mb-0">Add Product</h3>
    <a href="{{ route('products') }}" class="btn btn-dark ms-auto">Back</a>
  </div>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="container">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="title" placeholder="Product Name">
          <label for="title">Product Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="details" placeholder="Product details">
          <label for="details">Product details</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="price" placeholder="Price">
          <label for="price">Price</label>
        </div>
        
        <input type="file" name="img_path" accept="image/*" class="form-control mb-3">
 
        <button type="submit" class="btn btn-primary">Save Product</button>
      </div>
    </form>
@endsection