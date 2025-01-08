<?php

declare(strict_types=1);

class StripeGateway implements GatewayInterface
{
    public function purchase(Order $order, array $data = []): void
    {
        $payment = (new StripeClient([
            'api_key' => config('stripe.secret'),
            'version' => config('stripe.version'),
            'api_base' => config('stripe.baseUrl'),
        ]))
            ->purchase($data['token'], $order->totalPrice);
    }
}