<?php

namespace Examples;

class State extends BaseRequest
{
    /**
     * Method GetOrderState
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "GetOrderState";
        $this->payload = [
            "OrderId" => "10000069",
        ];
    }
}