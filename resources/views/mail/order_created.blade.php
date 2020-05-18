<p>Открывай шире карман, пришел заказ!</p>
<p>От: {{ $name }}</p>
<p>Телефон: {{ $phone }}</p>
<p>Email: {{ $email }}</p>
<p> На сумму: {{ $fullSum }} </p>

<table>
    <tbody>
    @foreach($order->products as $product)
        <tr>
            <td>
                <a href="{">
                    <img height="56px" src="{{ $product->image }}">
                    {{ $product->name }}
                </a>
            </td>
            <td><span class="badge">{{ $product->pivot->count }}</span>
                <div class="btn-group form-inline">
                    {!! $product->description !!}
                </div>
            </td>
            <td>{{ $product->price }} руб.</td>
            <td>{{ $product->getPriceForCount() }} руб.</td>
        </tr>
    @endforeach
    </tbody>
</table>
