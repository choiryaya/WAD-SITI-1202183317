@extends('layout.navbar')

@section('content')
<div class="container">
    <div style="display: flex; flex-direction: column">
        <h4 style="text-align:center">Order</h4>
    </div>
    <div class="bg-white my-3">
        <div class="row">
            <div class="col-md-6">
                <img src='../../../{{$products->img_path}}' width="100%" />
            </div>
            <div class="col-md-6 p-3">
                <h5 class="card-title">{{ $products->name }}</h5>
                <p class="card-text">{{$products->description}}</p>
                <h4 style="font-weight: bold">$ {{$products->price}} </h4>
            </div>
        </div>
    </div>
    <div class="bg-white p-3">
        <div style="display: flex; flex-direction: column">
            <h4 style="margin: 0em auto;">Buyer Information</h4>
        </div>
        <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="hidden" value="{{$products->id}}" name='product_id' />
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name='name' aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contact</label>
                <input type="number" class="form-control" name='contact' aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="inputZip">Quantity</label>
                <input type="number" class="form-control" name='quantity'>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            </form>
    </div>
</div>
@endsection