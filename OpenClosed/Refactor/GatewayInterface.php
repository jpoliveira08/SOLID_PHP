<?php

interface GatewayInterface
{
    public function purchase(Order $order, array $data = []): void;
}