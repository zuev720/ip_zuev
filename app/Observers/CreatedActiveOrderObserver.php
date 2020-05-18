<?php

namespace App\Observers;

use App\Models\Order;

class CreatedActiveOrderObserver
{

    /**
     * Handle the order "updated" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function updating(Order $order)
    {
        $oldStatus = $order->getOriginal('status');
        if ($oldStatus == 0 && $order->status > 0)
        {

        }
    }
}
