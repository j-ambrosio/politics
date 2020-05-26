<?php


namespace App\Service\PoliticsConsumer;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use \Exception;

trait JsonConsumerTrait
{
    protected static function getSerializer(): Serializer
    {
        return new Serializer([new GetSetMethodNormalizer(), ['json' => new JsonEncoder()]]);
    }

    public function decode(string $data)
    {
        $serializer = self::getSerializer();
        return $serializer->decode($data, 'json');
    }

    public function getContent(string $url)
    {
        try {
            $client = HttpClient::create();
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Accept' => 'application/json'
                ]
            ]);
            return $this->decode($response->getContent());
        } catch(Exception $exception) {
            return null;
        }
    }
}