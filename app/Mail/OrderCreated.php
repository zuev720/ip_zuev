<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

   protected $name;
   protected $phone;
   protected $email;
   protected $order;


    public function __construct($name, $phone, $email, Order $order)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->order = $order;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fullSum = $this->order->getFullPrice();
        return $this->view('mail.order_created', [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'fullSum' => $fullSum,
            'order' => $this->order
        ]);
    }
}
