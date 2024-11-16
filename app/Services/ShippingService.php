<?php

namespace App\Services;

use Illuminate\Http\Exceptions\HttpResponseException;

class ShippingService
{
    public function getShippingFees($companyName, $orderWeight)
    {
        switch ($companyName) {
            case 'ARAMEX':
                return $this->getAramexFees($orderWeight);
                break;
            case 'DHL':
                return $this->getDHLFees($orderWeight);
                break;
            case 'LOCAL':
                return $this->getLocalFees();
                break;
            default:
                throw new HttpResponseException(
                    response()->json([
                        "message" => "Shipping to the selected destination not available!",
                        "status"  => 400,
                    ], 400)
                );
                break;
        }
    }

    private function getDHLFees($orderWeight)
    {
        return [
            "shipping_company" => "DHL",
            "currency" => "USD",
            "fees" =>  $orderWeight * 10,
        ];
    }

    private function getAramexFees($orderWeight)
    {
        return [
            "shipping_company" => "Aramex",
            "currency" => "USD",
            "fees" =>  $orderWeight * 5,
        ];
    }

    private function getLocalFees()
    {
        return [
            "shipping_company" => "Local",
            "currency" => "USD",
            "fees" => 4,
        ];
    }
}
