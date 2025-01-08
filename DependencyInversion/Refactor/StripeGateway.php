<?php

class StripeGateway implements PaymentGateway
{
    public function charge(float $amount, string $token): Transaction
    {
        // TODO: Implement charge() method.
    }
}