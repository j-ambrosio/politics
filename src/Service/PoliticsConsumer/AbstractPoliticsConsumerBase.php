<?php


namespace App\Service\PoliticsConsumer;


abstract class AbstractPoliticsConsumerBase implements PoliticsConsumerInterface
{
    protected string $apiUrl;

    protected $data;

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function setApiUrl(string $url): void
    {
        $this->apiUrl = $url;
    }

    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }
}