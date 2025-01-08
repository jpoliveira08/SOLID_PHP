<?php

class AppServiceProvider
{
    public function register(): void
    {
        if (app()->isProduction()) {
            $this->app->bind(PaymentGateway::class, StripeGateway::class);
        } else {
            $this->app->bind(PaymentGateway::class, FakeGateway::class);
        }
    }
}