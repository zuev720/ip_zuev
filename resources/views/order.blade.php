@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')
    <main class="order_confirm">
        <div class="order_confirm_header_block">
            <h4 class="order_confirm_header">Подтверждение заказа</h4>
        </div>
        <div class="order_confirm_input_block">
            <form action="{{ route('basket-confirm') }}" method="POST">
                <div class="order_confirm_form_wrapper">
                    <h6 class="order_confirm_header_input">Укажите свои имя, номер телефона или электронную почту, чтобы наш менеджер мог с вами связаться</h6>
                    <div class="order_input_block">
                        <label for="name" class="order_label order_confirm_label_name">Имя: </label>
                        <input type="text" name="name" id="name" value="" class="form-control order_input">
                    </div>
                    <div class="order_input_block">
                        <label for="phone" class="order_label order_confirm_label_phone">Номер телефона:</label>
                        <input type="tel" name="phone" id="phone" value="" class="form-control order_input">
                    </div>
                    <div class="order_input_block">
                        <label for="email" class="order_label">Электронная почта:</label>
                        <input type="email" name="email" id="email" value="" class="form-control order_input">
                    </div>
                </div>
                @csrf
                <div class="order_confirm_information_block">
                    @foreach($order->products as $product)
                        <div class="order_product">
                            <span class="order_product_name">{{ $product->name }} - {{ $product->size }}</span>
                            <span class="order_product_count">{{ $product->pivot->count }} шт.</span>
                            <span class="order_product_price">{{ $product->getPriceForCount() }} ₽</span>
                        </div>
                    @endforeach
                </div>
                <div class="order_confirm_block">
                    <div class="order_confirm_information_order_block">
                        <p class="order_confirm_information_order">Общая стоимость заказа: <span class="order_confirm_full_price">{{ $order->getFullPrice() }} ₽</span></p>
                    </div>
                    <input type="submit" class="order_confirm_button" value="Подтвердить заказ">
                </div>
            </form>
        </div>
    </main>
@endsection
