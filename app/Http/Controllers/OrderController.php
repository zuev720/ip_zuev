<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        } else {
            session()->flash('warning', 'Ваша корзина пуста!');
            return redirect()->route('index');
        }
        return view('basket', compact('order'));
    }


    public function basketPlace()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }


    public  function basketAdd(Request $request, $productId)
    {
       $orderId = session('orderId');
       if (is_null($orderId)) {
           $order = Order::create();
           session(['orderId' => $order->id]);
       }  else {
           $order = Order::find($orderId);
       }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if (is_numeric($request->count_product)) {
                $pivotRow->count += $request->count_product;
            } else {
                $pivotRow->count++;
            }
            $pivotRow->update();
        }
        else {
            if (is_numeric($request->count_product)) {
                $order->products()->attach($productId);
                $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                $pivotRow->count = $request->count_product;
                $pivotRow->update();
            } else {
                $order->products()->attach($productId);
            }
        }

        return redirect()->route('basket');
    }

    public function basketConfirm(Request $request)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone, $request->email);

        if ($success) {
            session()->flash('success', 'Ваш заказ принят в обработку, в ближайшее время наш менеджер свяжется с вами!');
        } else {
            session()->flash('warning', 'Случилась ошибка');
        }

        return redirect()->route('index');
    }





    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        return redirect()->route('basket');
    }

    public function deleteProduct($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        $order->products()->detach($productId);
        return redirect()->route('basket');
    }
}
