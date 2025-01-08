<?php

interface PaymentGateway
{
    public function charge(float $amount, string $token): Transaction;
}