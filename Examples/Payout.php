<?php

namespace Examples;

class Payout extends BaseRequest
{
    /**
     * Method Cards.Payout
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Cards.Payout";
        $this->payload = [
            "OrderId" => "20000051",
            "Amount" => 150,
            "Currency" => "USD",
            "CardInfo" => [
                "CardNumber" => "4111111111111111",
                "CardHolder" => "CARD HOLDER",
                "ExpirationYear" => "2024",
                "ExpirationMonth" => "12",
            ],
        ];
    }
}