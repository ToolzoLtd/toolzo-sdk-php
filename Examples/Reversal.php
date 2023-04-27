<?php

namespace Examples;

class Reversal extends BaseRequest
{
    /**
     * Method Cards.Reversal
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Cards.Reversal";
        $this->payload = [
            "OrderId" => "2000005",
            "ParentOrderId" => "10000067",
            "Currency" => "USD",
            "Description" => "TEST",
        ];
    }
}