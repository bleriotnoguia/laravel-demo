<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use Illuminate\Http\Request;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway){
        $order = $orderDetails->all();
        dd($paymentGateway->charge(1500));
    }
}
