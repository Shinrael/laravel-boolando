@extends('layout.main')

@section('content')

    <div class="container d-flex flex-wrap justify-content-center align-content-start overflow-hidden">
        @foreach ($products as $product)
        <div class="product overflow-hidden">
            <img class="image-one" src="{{ $product['frontImage'] }}" alt="Vestito">
            <img class="image-two" src="{{ $product['backImage'] }}" alt="Vestito Alt">
            <div class="product-text">
              <p>{{ $product['brand'] }}</p>
              <p><strong>{{ $product['name'] }}</strong></p>
              <p><span class="price-now">14,99 &euro;</span> <span class="first-price">{{ $product['price'] }} &euro;</span></p>
            </div>
            <div class="discount">-50%</div>
            <div class="green">Sostenibilità</div>
            <div class="heart"><i class="fa-solid fa-heart"></i>
            </div>
        </div>
        @endforeach
    </div>

@endsection
