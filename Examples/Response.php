<?php

namespace Examples;

class Response
{
    public ?object $payload = null;
    public ?string $type = null;
    public ?string $correlationId = null;
    public ?string $timeStamp = null;
    public ?string $executeDuration = null;
    public ?string $api_key = null;
    public ?string $signature = null;
    public bool $encrypted;

    /**
     * @throws BadTypeException
     */
    public function __construct($response)
    {
        $responseContent = json_decode($response->getBody()->getContents());

        if (!$responseContent) {
            throw new BadTypeException('Can not decode JSON');
        }
        $result = json_decode(base64_decode($responseContent->Payload));

        $this->payload = $result->Payload;
        $this->type = $result->Type;
        $this->executeDuration = $result->ExecutionDuration;
        $this->correlationId = $result->CorrelationId;
        $this->timeStamp = $result->TimeStamp;
        $this->api_key = $responseContent->ApiKey;
        $this->signature = $responseContent->Signature;
        $this->encrypted = $responseContent->Encrypted ?? false;
    }
}

