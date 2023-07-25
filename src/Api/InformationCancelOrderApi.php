<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Api;

use Scraper\ScraperLaPostePostage\Model\CancelOrderResponse;

class InformationCancelOrderApi extends LapostePostageApi
{
    public function execute(): object
    {
        return $this->serializer->deserialize($this->response->getContent(false), CancelOrderResponse::class, 'json');
    }
}
