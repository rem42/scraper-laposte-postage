<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Request;

use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestException;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\ScraperColissimo\Factory\SerializerFactory;
use Scraper\ScraperLaPostePostage\Rest\Orders;

#[Scraper(path: 'orders')]
class OrdersRequest extends LapostePostageRequest implements RequestBody, RequestHeaders, RequestException
{
    protected Orders $orders;
    protected string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
        $this->orders = new Orders();
    }

    public function isThrow(): bool
    {
        return false;
    }

    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json',
        ];
    }

    public function getBody(): string
    {
        return SerializerFactory::create()
            ->serialize($this->orders, 'json')
            ;
    }

    /**
     * @return Orders
     */
    public function getOrders(): Orders
    {
        return $this->orders;
    }
}
