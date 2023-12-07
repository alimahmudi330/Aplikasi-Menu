@extends('customer.layout')

@section('content')

<div class="row">
    @foreach($products as $product)
    <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
        <div class="img_thumbnail productlist">
            <img src="{{ asset('img') }}/{{ $product->gambar }}" class="img-fluid">
            <div class="caption">
                <h4>{{ $product->nama_menu }}</h4>
                <p>{{ $product->deskripsi }}</p>
                <p><strong>Price: </strong> Rp{{ $product->harga }}</p>
                <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id_menu) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
            </div>
        </div>
    </div>
    @endforeach
</div>






@endsection