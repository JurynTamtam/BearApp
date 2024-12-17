@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
  <div class="d-flex">
    <h3 class="mb-0">Edit Product</h3>
  </div>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="container">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="title" placeholder="Product Name"
          value="{{ $product->title }}" >
          <label for="title">Product Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="details" placeholder="Product details"
          value="{{ $product->details }}" >
          <label for="details">Product details</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="price" placeholder="Price"
          value="{{ $product->price }}" >
          <label for="price">Price</label>
        </div>
        
        
        <label class="form-label fw-bold">Image</label><br>
            <img src="{{ asset($product->img_path) }}" style="height: 200px; width: 250px;">
        <input type="file" name="img_path" accept="image/*" class="form-control my-3" placeholder="Enter email">
 
        <a href="{{ route('products') }}" class="btn btn-primary ms-auto"><i class="fa fa-arrow-left"></i>Back </a>
        <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i>Update</button>
      </div>

    </form>
@endsection