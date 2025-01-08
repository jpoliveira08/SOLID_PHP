<?php

class AmazonPaymentsGateway implements GatewayInterface
{

    public function purchase(Order $order, array $data = []): void
    {
        $payment = (new AmazonClient([
            'merchant_id' => config('amazon.merchantId'),
            'access_key' => config('amazon.acessKey'),
            'secret_key' => config('amazon.secretKey')
        ]))
            ->purchase([
                'orderReferenceId' => $order->amazonId,
                'charge_amount' => $order->totalPrice
            ]);
    }
}