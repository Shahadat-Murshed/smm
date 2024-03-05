<?php

namespace App\Interfaces;

use App\DTO\Payment;

interface PaymentGateway
{
    public function pay(Payment $payment);
    public function refund(array $data);
    public function status(array $data);
    public function callback(array $data);
}
