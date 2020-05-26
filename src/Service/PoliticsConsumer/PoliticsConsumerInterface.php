<?php

namespace App\Service\PoliticsConsumer;

interface PoliticsConsumerInterface
{
    public function setApiUrl(string $url);

    public function getApiUrl() : string;

    public function handle();

    public function get(string $url);
}