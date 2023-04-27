<?php

namespace Examples;

class Payment extends BaseRequest
{
    /**
     * Method Cards.Payment
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Cards.Payment";
        $this->payload = [
            "OrderId" => "test_php_8",
            "Amount" => 150,
            "ReturnUrl" => "https://google.com",
            "Description" => "Test operation",
            "Currency" => "USD",
            "RebillFlag" => True,
            "CardInfo" => [
                "CardNumber" => "4111111111111111",
                "CardHolder" => "HANNA TESTER",
                "ExpirationYear" => "2024",
                "ExpirationMonth" => "12",
                "Cvv" => "736"
            ],
        ];
    }
}
