@extends('layouts.app')

@section('title', 'Show Product')

@section('contents')
    <div class="d-flex">
        <h3 class="mb-0">Detail Product</h3>
        <a href="{{ route('products') }}" class="btn btn-primary ms-auto">Back</a>
    </div>
    <hr />  

    <div class="row"> 
        
    <!-- Image section aligned to the right -->
        <div class="col-md-6 mb-3">
            <!--<label class="form-label fw-bold">Image</label><br> -->
            <img src="{{ asset($product->img_path) }}" style="height: 220px; width: 250px;">
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label fw-bold">Product Name</label>
            <input type="text" name="title" class="form-control border-0" placeholder="Title" value="{{ $product->title }}" readonly>
        
            <label class="form-label fw-bold">Price</label>
            <input type="text" name="price" class="form-control border-0" placeholder="Price" value="{{ $product->price }}" readonly>
        </div>



    <div class="row">
        <div class="col mb-3">
            <label class="form-label fw-bold">Details</label>
            <p class="form-control border-0">{{ $product->details }}</p>
    </div>

    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label fw-bold" >Created At</label>
            <input type="text" name="created_at" class="form-control border-0" placeholder="Created At" value="{{ $product->created_at }}" readonly>

            <label class="form-label fw-bold" >Updated At</label>
            <input type="text" name="updated_at" class="form-control border-0" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection
