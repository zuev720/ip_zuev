@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
    <main class="basket_block">
        <header class="basket_header_block">
        <h2>Корзина</h2>
        <p class="">Оформление заказа</p>
        </header>
        <div class="basket_block_of_names">
            <div class="block_of_names_wrapper column_delete"><p class="column_text">Удалить</p></div>
            <div class="block_of_names_wrapper column_name"><p class="column_text">Название</p></div>
            <div class="block_of_names_wrapper column_image"><p class="column_text">Изображение</p></div>
            <div class="block_of_names_wrapper column_amount"><p class="column_text">Кол-во</p></div>
            <div class="block_of_names_wrapper column_price"><p class="column_text">Цена товара</p></div>
            <div class="block_of_names_wrapper column_total_price"><p class="column_text">Общая стоимость</p></div>
        </div>
        @foreach($order->products as $product)
            <div class="body_basket">
                <div class="delete_product_basket_block">
                    <form class="basket_delete_form" action="{{ route('product-remove', $product) }}" method="POST">
                        <button class="button_delete_product" type="submit"></button>
                        @csrf
                    </form>
                </div>
                <div class="basket_product_name_block">
                    <a class="link_basket_product" href="{{ route('getProduct', $product->id) }}">
                        <p class="basket_product_name">{{ $product->name }}</p>
                    </a>
                </div>
                <div class="basket_image_product_block">
                    <img class="basket_image_product" src="{{ $product->image }}" alt="{{ $product->name }}">
                </div>
                <div class="amount_product_block">
                    <div class="amount_product_wrapper">
                        <div class="delete_product_wrapper">
                            <form class="delete_product_form" action="{{ route('basket-remove', $product) }}" method="POST">
                                <button type="submit" class="button_minus">-</button>
                                @csrf
                            </form>
                        </div>
                        <span class="amount_product">{{ $product->pivot->count }} шт.</span>
                        <div class="add_product_wrapper">
                            <form class="add_product_form" action="{{ route('basket-add', $product) }}" method="POST">
                                <button type="submit" class="button_plus">+</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class="basket_price_block">
                    <span class="basket_price_product">{{ $product->price }}</span><span class="currency"> ₽</span>
                </div>
                <div class="basket_sum_price_block">
                    <span class="basket_sum_price_product">{{ $product->getPriceForCount() }}</span><span class="currency"> ₽</span>
                </div>
            </div>
        @endforeach
        <div class="basket_total_price_block">
            <span class="header_total_price_block">Итого:</span>
            <span class="total_price">{{ $order->getFullPrice() }}</span><span class="currency"> ₽</span>
        </div>
        <footer class="basket_footer">
            <div class="see_other_products_block">
                <a class="button_see_other_products" type="button" href="{{ route('products') }}">Посмотреть другие товары</a>
            </div>
            <div class="checkout_order_block">
                <a type="button" class="checkout_order" href="{{ route('basket-place') }}">Оформить заказ</a>
            </div>
        </footer>
    </main>
{{--    <div class="">--}}
{{--        <div class="">--}}
{{--            <table class="table">--}}
{{--                <thead class="table-secondary">--}}
{{--                <tr>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($order->products as $product)--}}
{{--                    <tr>--}}
{{--                        <td class="align-middle">--}}
{{--                            <form action="{{ route('product-remove', $product) }}" method="POST">--}}
{{--                                <button class="button_delete_product" type="submit"><img class="image_remote_basket_product" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpTvF6s9H1giJYFQg3fvffsND5trFl2dVhg6MftG351oSRbMfv&usqp=CAU"></button>--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                        <td class="align-middle">--}}
{{--                            <a class="link_basket_product row align-items-center" href="{{ route('getProduct', $product->id) }}">--}}
{{--                                <img class="basket_image_product" src="{{ $product->image }}"><span class="d-none d-sm-none d-md-none d-lg-block ml-4">{{ $product->name }}</span></a>--}}
{{--                        </td>--}}
{{--                        <td class="align-middle"><span class="align-middle">{{ $product->pivot->count }} шт.</span>--}}
{{--                            <div class="btn-group">--}}
{{--                                <form action="{{ route('basket-remove', $product) }}" method="POST">--}}
{{--                                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true">-</span></button>--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                                <form action="{{ route('basket-add', $product) }}" method="POST">--}}
{{--                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true">+</span></button>--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td class="align-middle">{{ $product->price }} руб.</td>--}}
{{--                        <td class="align-middle">{{ $product->getPriceForCount() }} руб.</td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                <tr>--}}
{{--                    <td colspan="4">Общая стоимость:</td>--}}
{{--                    <td>{{ $order->getFullPrice() }} руб.</td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--            <br>--}}
{{--            <div class="row justify-content-between">--}}
{{--                <div class="btn-group" style="color: white" role="group">--}}
{{--                    <a class="button_see_other_products btn btn-secondary" type="button" href="{{ route('products') }}">Посмотреть другие товары</a>--}}
{{--                </div>--}}
{{--            <div class="btn-group" role="group">--}}
{{--                <a type="button" class="checkout_order btn btn-success" href="{{ route('basket-place') }}">Оформить заказ</a>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
