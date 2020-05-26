<?php

namespace App\Service\PoliticsConsumer;

class CongresspersonConsumer extends AbstractPoliticsConsumerBase
{
    use JsonConsumerTrait;

    public function get()
    {
        $this->setData = $this->getContent($this->getApiUrl());
    }

    public function handle(): void
    {
        // TODO: implement creation of entities
        // $data = $this->getData();
    }
}