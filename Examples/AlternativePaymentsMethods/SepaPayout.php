<?php

namespace Examples\AlternativePaymentsMethods;

use Examples\BaseRequest;

class SepaPayout extends BaseRequest
{
    /**
     * Method Sepa.Payout
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "Sepa.Payout";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "Currency" => "USD",
            "ClientInfo" => [
                "FirstName" => "John",
                "LastName" => "Doe",
                "PhoneNumber" => "+79123456789",
                "Email" => "johnd@gmail.com",
                "Country" => "AT",
                "City" => "Copenhagen",
                "Zip" => "12345",
                "Address" => "123, Park Lane",
                "Birth" => "1990-01-01T00:00:00",
            ],
            "Account" => [
                "Iban" => "DE89370400440532013000",
                "Country" => "AT",
            ],
        ];
    }
}