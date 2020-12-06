@extends('layout.navbar')

@section('content')
<div class="container" style="display: flex; flex-direction: column">
<h4 style="text-align:center;">Input Product</h4>
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
        <input type="text" class="form-control" name='product_name' aria-describedby="emailHelp">
    </div>
    <label class="sr-only" for="inlineFormInputGroupUsername">Price</label>
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text">$ USD</div>
        </div>
        <input type="number" class="form-control" name='price'>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" name='description' rows="3"></textarea>
        </div>
    <div class="form-group">
        <label for="inputZip">Stock</label>
        <input type="number" class="form-control" name='stock'>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">File Image</label>
        <input type="file" class="form-control-file" name="image">
        </div>
    <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>
@endsection