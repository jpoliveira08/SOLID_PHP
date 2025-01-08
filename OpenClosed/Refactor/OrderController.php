<?php

declare(strict_types=1);

class OrderController
{
    public function store(Request $request, Order $order)
    {
        $gateway = $request->user()->defaultPaymentGateway;

        $gateway->purchase($order, [
            'token' => $request->token,
        ]);

        return redirect()->route('orders.index')
            ->with('success', "Order {$order->id} has been paid");
    }
}