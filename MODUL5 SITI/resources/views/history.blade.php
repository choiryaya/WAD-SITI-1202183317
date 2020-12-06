@extends('layout.navbar')

@section('content')
<div class="container" style="display:flex; flex-direction: column">
    @if($orders->isEmpty())
    <div style="margin: 0 auto; margin-top: 1rem;">
        <p style="text-align: center;">There is no data..</p>
    </div>
        <div class="row justify-content-md-center mt-2">
        <a href="/order" style="text-decoration: none; color: white;" class='btn btn-dark'>Order Now</a>
    </div>
    @else
    <table class="table" style="margin-top: 3rem;">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Buyer Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $key => $item)
            <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->product->name }}</td>
            <td>{{ $item->buyer_name }}</td>
            <td>{{ $item->buyer_contact }}</td>
            <td>{{ $item->amount }}</td>
            </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        @endif
</div>
@endsection