<?php

namespace Examples\AlternativePaymentsMethods;

use Examples\BaseRequest;

class CryptoPayout extends BaseRequest
{
    /**
     * Method Crypto.Payout
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Crypto.Payout";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "Currency" => "USD",
            "Address" => "mqgsvC1CsPCW2NMaXAdFZFdqKhGH5kgAtC",
        ];
    }
}