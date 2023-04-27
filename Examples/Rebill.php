<?php

namespace Examples;

class Rebill extends BaseRequest
{
    /**
     * Method Cards.Rebill
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Cards.Rebill";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "Currency" => "USD",
            "BindingId" => 106837,
        ];
    }
}