<?php

require __DIR__ . '/Transport.php';
require __DIR__ . '/autoload.php';
require __DIR__ . '/vendor/autoload.php';

$request = new Examples\Payment();
//$request = new Examples\PaymentLatam();
//$request = new Examples\PaymentLink();
//$request = new Examples\Payout();
//$request = new Examples\Rebill();
//$request = new Examples\Refund();
//$request = new Examples\Reversal();
//$request = new Examples\State();
//
//$request = new Examples\AlternativePaymentsMethods\BankTransferChinaPayment();
//$request = new Examples\AlternativePaymentsMethods\BankTransferChinaPayout();
//$request = new Examples\AlternativePaymentsMethods\BankTransferEuPayment();
//$request = new Examples\AlternativePaymentsMethods\Boleto();
//$request = new Examples\AlternativePaymentsMethods\CryptoPayment();
//$request = new Examples\AlternativePaymentsMethods\CryptoPayout();
//$request = new Examples\AlternativePaymentsMethods\DepositExpressPayment();
//$request = new Examples\AlternativePaymentsMethods\LotteryPayment();
//$request = new Examples\AlternativePaymentsMethods\PicPayPayment();
//$request = new Examples\AlternativePaymentsMethods\PixPayment();
//$request = new Examples\AlternativePaymentsMethods\SepaPayout();

$apiClient = new Examples\Transport();

print_r($request);

$response = $apiClient->sendRequest($request);

print_r($response);
