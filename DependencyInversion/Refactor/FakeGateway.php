<?php

class FakeGateway implements PaymentGateway
{
    /**
     * Created for tests purpose, returns hardcoded test data
     * @param float $amount
     * @param string $token
     * @return Transaction
     */
    public function charge(float $amount, string $token): Transaction
    {
        return ['fake' => $response];
    }
}