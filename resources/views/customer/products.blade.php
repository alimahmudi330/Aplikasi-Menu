@extends('customer.layout')

@section('content')

<div class="row">
    @foreach($products as $product)
    <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
        <div class="img_thumbnail productlist">
            <img src="{{ asset('img') }}/{{ $product->gambar }}" class="img-fluid">
            <div class="caption">
                <h4>{{ $product->product_name }}</h4>
                <p>{{ $product->product_description }}</p>
                <p><strong>Price: </strong> Rp{{ $product->price }}</p>
                <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}"
                        class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection