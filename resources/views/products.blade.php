@extends('layouts.master')
@section('title', 'Товары')
@section('content')
<div class="card_product row m-0 p-0 justify-content-center">
    @foreach($products as $product)
        <div class="card col-12 col-sm-6 col-lg-3 mr-4">
            <div class="container mt-3"><img class="image_card_product img-fluid card-img-top" src="{{ $product->image }}" alt="Card image cap"></div>
            <div class="card-body">
                <h5 class="card-title text-center">{{ $product->price }} руб.</h5>
                <p class="card-text text-center ml-1 mr-1">{{ $product->name }}</p>
                <div class="row justify-content-center"><a href="{{ route('getProduct', [$product->id]) }}" class="card_button btn align-middle">Подробнее</a></div>
            </div>
        </div>
    @endforeach
</div>
@endsection
