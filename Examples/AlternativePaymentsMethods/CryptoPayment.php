<?php

namespace Examples\AlternativePaymentsMethods;

use Examples\BaseRequest;

class CryptoPayment extends BaseRequest
{
    /**
     * Method Crypto.Payment
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Crypto.Payment";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "Currency" => "USD",
            "ReturnUrl" => "http://coogle.com",
            "Description" => "This is description",
            "ClientInfo" => [
                "Email" => "johndoe@gmail.com",
            ],
        ];
    }
}