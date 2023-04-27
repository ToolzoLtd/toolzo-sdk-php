<?php

namespace Examples\AlternativePaymentsMethods;

use Examples\BaseRequest;

class BankTransferChinaPayout extends BaseRequest
{
    /**
     * Method BankTransferChina.Payout
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "BankTransferChina.Payout";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "Currency" => "USD",
            "BankCode" => "mockBank",
            "RecipientAccount" => "4564984561151",
            "ClientInfo" => [
                "FirstName" => "Ivan",
                "LastName" => "Ivanov",
            ],
        ];
    }
}