<?php

class PaymentsController
{
    public function __construct(public PaymentGateway $gateway)
    {
    }

    public function store(Request $request)
    {
        $amount = $request->get('amount');
        $userToken = $request->get('userToken');

        $this->gateway->charge($amount, $userToken);
    }
}