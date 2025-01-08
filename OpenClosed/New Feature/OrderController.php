<?php

declare(strict_types=1);

class OrderController
{
    public function store(Request $request, Order $order)
    {
        $gateway = $request->user()->get('defaultPaymentGateway');

        if ($gateway == 'amazon') {
            $payment = (new AmazonClient([
                'merchant_id' => config('amazon.merchantId'),
                'access_key' => config('amazon.acessKey'),
                'secret_key' => config('amazon.secretKey')
            ]))
                ->purchase([
                    'orderReferenceId' => $order->amazonId,
                    'charge_amount' => $order->totalPrice
                ]);
        } else {
            $payment = (new StripeClient([
                'api_key' => config('stripe.secret'),
                'version' => config('stripe.version'),
                'api_base' => config('stripe.baseUrl')
            ]))
                ->purchase($request->get('token'), $order->totalPrice);
        }
    }
}