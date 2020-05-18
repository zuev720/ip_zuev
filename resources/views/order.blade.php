@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')
    <div class="container">
            <h1 class="mt-3 text-center">Подтвердите заказ:</h1>
            <p class="mt-3 text-center">Общая стоимость заказа: <b>{{ $order->getFullPrice() }} руб.</b></p>
            <p class="mt-5 text-center">Укажите свои имя, номер телефона или электронную почту, чтобы наш менеджер мог с вами связаться:</p>
        <div class="row text-center mt-5">
            <div class="col-12">
                <form action="{{ route('basket-confirm') }}" method="POST">
                    <div class="container justify-content-center">
                        <div class="form-group row">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                            <div class="col-lg-8">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер телефона: </label>
                            <div class="col-lg-8">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <div class="text-center">ИЛИ</div>
                        <div class="form-group row">
                            <label for="email" class="control-label col-lg-offset-3 col-lg-2">Электронная почта: </label>
                            <div class="col-lg-8">
                                <input type="email" name="email" id="email" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    @csrf
                    <input type="submit" class="btn btn-success" value="Подтвердить заказ">
                </form>
            </div>
        </div>
    </div>
@endsection
