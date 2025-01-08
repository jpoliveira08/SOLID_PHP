<?php

namespace DependencyInversion;

use StripeGateway;

class PaymentsController
{
    // StripeGateway is clearly an implementation of the gateway concept
    public function __construct(public StripeGateway $gateway)
    {
    }

    /**
     * Difficult to test, it will hit Real stripe API
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $amount = $request->get('amount');
        $userToken = $request->get('userToken');

        $this->gateway->charge($amount, $userToken);
    }
}