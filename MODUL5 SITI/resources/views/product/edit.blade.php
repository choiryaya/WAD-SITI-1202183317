@extends('layout.navbar')

@section('content')
<div class="container">
<form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('patch')
    <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" name='product_name' value="{{ $product->name }}" aria-describedby="emailHelp">
    </div>
    <label class="sr-only" for="inlineFormInputGroupUsername">Price</label>
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text">$ USD</div>
        </div>
        <input type="number" class="form-control" name='price' value="{{ $product->price }}" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" name='description' rows="3">{{ $product->description }}</textarea>
        </div>
    <div class="form-group">
        <label for="inputZip">Stock</label>
        <input type="number" class="form-control" name='stock' value="{{ $product->stock }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">File Image</label>
        <input type="file" class="form-control-file" name="image">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection