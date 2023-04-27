<?php

namespace Examples;

class PaymentLink extends BaseRequest
{
    /**
     * Method PaymentLink.Add
     */
    public function __construct()
    {
        $this->METHOD_TYPE = "PaymentLink.Add";
        $this->payload = [
            "PaymentName" => "Payment_tratata",
            "Order ID" => "link-135",
            "Website" => "616-test.com",
            "Currency" => "USD",
            "Amount" => 150,
            "Description" => "test",
            // "Days" => "00",
            "Hours" => "2",
            // "Minutes" => "00",
            "Email" => "tratata@gmail.com",
        ];
    }
}