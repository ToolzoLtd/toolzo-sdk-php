<?php

namespace Examples\AlternativePaymentsMethods;

use Examples\BaseRequest;

class Boleto extends BaseRequest
{
    /**
     * Method Boleto.Payment
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Boleto.Payment";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "Currency" => "USD",
            "ClientInfo" => [
                "FirstName" => "Ivan",
                "LastName" => "Ivanov",
                "Birth" => "1990-03-01T00:00:00Z",
                "Email" => "ivanov@gmail.com",
                "TaxId" => "50284414727",
                "PhoneNumber" => "75991435892",
                "Zip" => "38082365",
            ],
        ];
    }
}