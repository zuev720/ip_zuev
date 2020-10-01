@extends('layouts.master')
@section('title', 'Товар')
@section('content')
    <main class="product_block">
        <div class="product_block_wrapper">
            <header class="description_product_block">
                <div class="body_description_product_block">
                    <div class="product_header_block">
                        <h4 class="product_header">{{ $product->name }}</h4>
                    </div>
                    <div class="description_product_material_block">
                        <span class="product_material_header">Материалы:</span>
                        <h5>{{ $product->materials }}</h5>
                    </div>
                    <div class="description_product_size">
                        <span>Размер:</span>
                        <h5>{{ $product->size }}</h5>
                    </div>
                    <div class="description_product_purpose-application">
                        <span>Цели применения:</span>
                        <h5>{{ $product->description }}</h5>
                    </div>
                    <div class="description_product_price">
                        <span>Цена:</span>
                        <h5 class="price_product">{{ $product->price }} ₽</h5>
                    </div>
                </div>
            </header>
            <div class="product_image_block">
                <img class="description_product_image" src="{{ $product->image }}" alt="product">
            </div>
        </div>
        <div class="add_product_block">
            <footer class="footer_description_product_block">
                <span>Цена руб. включая НДС</span>
                <span>* Возможно изготовление элементов под скругляющий профиль заказчика</span>
                <span>**  Покраска в цвет по согласованию с заказчиком 40 руб за штуку</span>
            </footer>
            <div class="add_count_product_block">
                <form class="add_product_form" action="{{ route('basket-add', $product) }}" method="POST">
                    @error('count_product')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="product_count_block">
                        <div class="wrapper_input_count_product_add">
                            <label class="label_card_button_add_basket" for="count_product">Количество штук</label>
                            <input class="card_button_add_basket" name="count_product" id="count_product" type="number">
                        </div>
                        <button type="submit" class="add_count_product_button" role="button">Добавить в корзину</button>
                    </div>
                @csrf
                </form>
            </div>
        </div>
    </main>
@endsection
