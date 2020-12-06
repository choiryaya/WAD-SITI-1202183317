@extends('layout.navbar')

@section('content')
    <div class='container' >
        @if($products->isEmpty())
        <div style="margin: 0 auto; margin-top: 1rem;">
        <p style="text-align: center;">There is no data..</p>
    </div>
        <div class="row justify-content-md-center mt-2">
                <a href="{{ route('product.create') }}" style="text-decoration: none; color: white;" class='btn btn-dark'>Add Product</a>
            </div>
        @else
            <div style="display: flex; flex-direction: column">
                <h4 style="text-align:center;">Order</h4>
            </div>
            <div class="row">
                @foreach ($products as $item)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        <h4 style="font-weight: bold">$ {{$item->price}} </h4>
                        <a href="{{ route('order.show',$item->id) }}" class="btn btn-success">Order Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        @endif
    </div>
@endsection