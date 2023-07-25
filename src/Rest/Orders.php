<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class Orders
{
    public function __construct(
        private readonly Order $order = new Order(
        )
    ) {}

    public function getOrder(): Order
    {
        return $this->order;
    }
}
