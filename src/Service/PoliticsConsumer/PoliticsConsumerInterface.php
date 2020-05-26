<?php

namespace App\Service\PoliticsConsumer;

interface PoliticsConsumerInterface
{
    public function setApiUrl(string $url);

    public function getApiUrl() : string;

    public function handle(): void;

    public function get();

    public function getData();

    public function setData($data);
}