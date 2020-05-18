@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template text-center mt-3">
        <h1>Корзина</h1>
        <p class="mt-3">Оформление заказа</p>
        <div class="panel mt-5">
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th></th>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td class="align-middle">
                            <form action="{{ route('product-remove', $product) }}" method="POST">
                                <button class="button_delete_product" type="submit"><img class="image_remote_basket_product" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpTvF6s9H1giJYFQg3fvffsND5trFl2dVhg6MftG351oSRbMfv&usqp=CAU"></button>
                                @csrf
                            </form>
                        </td>
                        <td class="align-middle">
                            <a class="link_basket_product row align-items-center" href="{{ route('getProduct', $product->id) }}">
                                <img class="basket_image_product" src="{{ $product->image }}"><span class="d-none d-sm-none d-md-none d-lg-block ml-4">{{ $product->name }}</span></a>
                        </td>
                        <td class="align-middle"><span class="align-middle">{{ $product->pivot->count }} шт.</span>
                            <div class="btn-group">
                                <form action="{{ route('basket-remove', $product) }}" method="POST">
                                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true">-</span></button>
                                    @csrf
                                </form>
                                <form action="{{ route('basket-add', $product) }}" method="POST">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true">+</span></button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td class="align-middle">{{ $product->price }} руб.</td>
                        <td class="align-middle">{{ $product->getPriceForCount() }} руб.</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4">Общая стоимость:</td>
                    <td>{{ $order->getFullPrice() }} руб.</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="row justify-content-between">
                <div class="btn-group" style="color: white" role="group">
                    <a class="button_see_other_products btn btn-secondary" type="button" href="{{ route('products') }}">Посмотреть другие товары</a>
                </div>
            <div class="btn-group" role="group">
                <a type="button" class="checkout_order btn btn-success" href="{{ route('basket-place') }}">Оформить заказ</a>
            </div>
            </div>
        </div>
    </div>
@endsection
