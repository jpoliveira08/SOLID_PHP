<?php

declare(strict_types=1);

class OrderController
{
    public function store(Request $request, Order $order)
    {
        $payment = (new StripeClient([
            'api_key' => config('stripe.secret'),
            'version' => config('stripe.version'),
            'api_base' => config('stripe.baseUrl'),
        ]))
            ->purchase(
                $request->get('token'),
                $order->totalPrice,
            );

        return redirect()->route('orders.index')
            ->with('success', "Order {$order->id} has been paid");
    }
}