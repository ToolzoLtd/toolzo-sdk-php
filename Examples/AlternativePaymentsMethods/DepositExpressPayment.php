<?php

namespace Examples\AlternativePaymentsMethods;

use Examples\BaseRequest;

class DepositExpressPayment extends BaseRequest
{
    /**
     * Method DepositExpress.Payment
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "DepositExpress.Payment";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "Currency" => "USD",
            "Bank" => "mockBank",
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