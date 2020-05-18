@extends('layouts.master')
@section('title', 'Товар')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-5"><h3>{{ $product->name }}</h3></div>
        <div class="col-md-5 mt-5">
            <h5>Материалы:</h5>
            <p>{{ $product->materials }}</p>
            <h5>Размеры:</h5>
            <p>{{ $product->size }}</p>
            <h5>Цели применения:</h5>
            <p>{{ $product->description }}</p>
            <h5>Покрытие:</h5>
            <p>без покраски</p>
            <p>* Возможно изготовление элементов под скругляющий профиль заказчика<br>
                **  Покраска в цвет по согласованию с заказчиком 40 руб за штуку
            </p>
            <h5>Элементы для монтажа:</h5>
            <p>{{ $product->installation_elements }}</p>
            <h5>Цена:</h5>
            <p>{{ $product->price }} руб.</p>
            <p>Цена руб. без НДС</p>
        </div>
        <div class="col-md-4 mt-4">
            <img class="img-fluid" src="{{ $product->image }}" alt="product">
            <div class="container mt-3">
                <form action="{{ route('basket-add', $product) }}" method="POST">
                    <div class="text-right">
                        @error('count_product')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input class="card_button_in_basket mr-2" name="count_product" id="count_product" type="text" placeholder="">Введите кол-во шт.<button type="submit" class="btn btn-success mt-3" role="button">Добавить в корзину</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
