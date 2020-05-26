<?php


namespace App\Service\PoliticsConsumer;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\ResponseInterface;
use \Exception;

trait JsonConsumerTrait
{
    public function get(string $url): ?ResponseInterface
    {
        try {
            $client = HttpClient::create();
            return $client->request('GET', $url, [
                'headers' => [
                    'Accept' => 'application/json'
                ]
            ]);
        } catch(Exception $exception) {
            return null;
        }
    }
}