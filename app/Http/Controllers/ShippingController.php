<?php

namespace App\Http\Controllers;

use App\Http\Resources\GeneralResource;
use App\Services\ShippingService;
use App\Models\Order;

class ShippingController extends Controller
{
    public function assignShippingCompany(ShippingService $shippingService, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $ShippingCompany = $order->user->country->shipping_company;
        $fees  = $shippingService->getShippingFees($ShippingCompany, $order->weight);

        return GeneralResource::make([
            "message" => "Shipping Fees calculated successfully!",
            "status"  => 200,
            "data"    => $fees
        ]);
    }
}
