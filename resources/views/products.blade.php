@extends('layouts.master')
@section('title', 'Товары')
@section('content')

<div class="header_block_page">
    <h2 class="header_products_page">наша продукция</h2>
</div>

<main class="cards_products">
    @foreach($products as $product)
        <div class="product_card">
            <div class="product_card_body">
                <div class="product_card_image_block">
                    <img class="image_card_product" src="{{ $product->image }}" alt="Card image cap">
                </div>
                <div class="card_information_block">
                    <div class="card_information_wrapper card_price_wrapper"><h5 class="product_card_price">{{ $product->price }} ₽</h5></div>
                    <div class="card_information_wrapper card_text_wrapper">
                        <h4 class="product_card_text">{{ $product->name }}</h4>
                        <span class="product_radius">{{ $product->size }}</span>
                    </div>
                    <div class="card_information_wrapper card_button_wrapper"><a href="{{ route('getProduct', [$product->id]) }}" class="product_card_button">Подробнее</a></div>
                </div>
            </div>
        </div>
    @endforeach
</main>
@endsection
