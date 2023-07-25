<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Api;

use Scraper\ScraperLaPostePostage\Model\PostageResponse;

class OrdersApi extends LapostePostageApi
{
    public function execute(): object
    {
        return $this->serializer->deserialize($this->response->getContent(false), PostageResponse::class, 'json');
    }
}
