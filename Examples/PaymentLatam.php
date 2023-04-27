<?php

namespace Examples;

class PaymentLatam extends BaseRequest
{
    /**
     * Method CardsLatam.Payment
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "CardsLatam.Payment";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "ReturnUrl" => "https://google.com",
            "Description" => "DEBIT",
            "Currency" => "USD",
            "RebillFlag" => True,
            "CardInfo" => [
                "CardNumber" => "4111111111111111",
                "CardHolder" => "CARD HOLDER",
                "ExpirationYear" => "2024",
                "ExpirationMonth" => "12",
                "Cvv" => "736"
            ],
            "ClientInfo" => [
                "PhoneNumber" => "+75991435892",
                "FirstName" => "John",
                "LastName" => "Doe",
                "Email" => "doejohn@gmail.com",
                "TaxId" => "50284414727",
                "Zip" => "38082365",
            ],
        ];
    }
}