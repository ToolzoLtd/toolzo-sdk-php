<?php

namespace Examples;

class Refund extends BaseRequest
{
    /**
     * Method Cards.Refund
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Cards.Refund";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "ParentOrderId" => "10000018",
            "Currency" => "USD",
            "Description" => "TEST",
        ];
    }
}