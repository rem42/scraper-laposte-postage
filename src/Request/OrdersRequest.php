<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Request;

use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestException;
use Scraper\ScraperColissimo\Factory\SerializerFactory;
use Scraper\ScraperLaPostePostage\Rest\Orders;

#[Scraper(path: 'orders')]
class OrdersRequest extends LapostePostageRequest implements RequestBody, RequestException
{
    protected Orders $orders;

    public function __construct(string $token)
    {
        parent::__construct($token);
        $this->orders = new Orders();
    }

    public function isThrow(): bool
    {
        return false;
    }

    public function getBody(): string
    {
        return SerializerFactory::create()
            ->serialize($this->orders, 'json')
        ;
    }

    public function getOrders(): Orders
    {
        return $this->orders;
    }
}
