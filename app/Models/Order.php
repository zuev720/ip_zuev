<?php

namespace App\Models;

use App\Mail\OrderCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }


    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function saveOrder($name, $phone, $email)
    {
        if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->email = $email;
            $this->status = 1;
            $mail_to = 'zuev720@mail.ru';
            Mail::to($mail_to)->send(new OrderCreated($this->name, $this->phone, $this->email, $this));
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
    }


}
