@extends('customer.layout')

@section('content')

<div class="row">
    @foreach($products as $product)
    <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:30px;">
        <div class="img_thumbnail productlist">
            <img src="{{ asset(Storage::url($product->gambar)) }}" alt="{{ $product->nama_menu }}" class="img-fluid" style="object-fit: cover; width: 100%; height: 200px;">
            <div class="caption">
                <h4>{{ $product->nama_menu }}</h4>
                <p>{{ $product->diskripsi }}</p>
                <p>{{ $product->kategori }}</p>
                <p><strong>Price: </strong> Rp{{ $product->harga }}</p>
                <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id_menu) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection