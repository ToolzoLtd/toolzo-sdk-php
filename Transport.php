<?php

namespace Examples;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Transport
{
    const API_URL = "https://pay.toolzo.com";
    const API_VERSION = "1";
    const API_KEY = "your apikey";
    const SECRET = "your secret key";
    const REQUEST_TYPE_REQUEST = "Request";

    /**
     * @param BaseRequest $request
     * @return Response
     * @throws BadTypeException
     * @throws GuzzleException
     */
    public function sendRequest(BaseRequest $request): Response
    {
        $response = $this->request($request);

        return new Response($response);
    }

    /**
     * @throws GuzzleException
     */
    protected function request(BaseRequest $request): ResponseInterface
    {
        $main_message = [
            "Type" => self::REQUEST_TYPE_REQUEST,
            "CorrelationId" => $this->getIdempotenceKey(),
            "TimeStamp" => date('Y-m-d\TH:i:sp'),
            "TTL" => "00:00:45",
            "Payload" => [
                "Type" => $request->METHOD_TYPE,
                "ApiVersion" => self::API_VERSION,
                "Priority" => "Normal",
                "Payload" => $request->payload,
            ],
        ];
        /**
         * Form $main_message in JSON format as string;
         */
        $main_message_str = json_encode($main_message, JSON_UNESCAPED_SLASHES);
        /**
         * $main_message_str in Base64;
         */
        $payload_base64 = base64_encode($main_message_str);
        /**
         * Convert hmacKey from Base64 string to byte array;
         */
        $key_decoded = base64_decode(self::SECRET);
        /**
         * Generate a signature using the HMAC algorithm based
           on the main_message and the secret;
         */
        $request_encoded = hash_hmac('sha1', $main_message_str, $key_decoded,true);
        /**
         * Signature into a Base64 string;
         */

        $signature = base64_encode($request_encoded);

        $http_message = [
            "ApiKey" => self::API_KEY,
            "Payload" => $payload_base64,
            "Signature" => $signature,
        ];

        $options = ['json' => $http_message];
        $client = new Client([
            'base_uri' => self::API_URL,
            'expect'   => false
        ]);

        return $client->post("", $options);
    }

    /**
     * @return string
     */
    private function getIdempotenceKey(): string
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }
}
