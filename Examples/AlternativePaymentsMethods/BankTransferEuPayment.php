<?php

namespace Examples\AlternativePaymentsMethods;

use Examples\BaseRequest;

class BankTransferEuPayment extends BaseRequest
{
    /**
     * Method BankTransferEu.Payment
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "BankTransferEu.Payment";
        $this->payload = [
            "OrderId" => "2000005",
            "Amount" => 150,
            "Currency" => "USD",
            "ReturnUrl" => "https://google.com",
        ];
    }
}