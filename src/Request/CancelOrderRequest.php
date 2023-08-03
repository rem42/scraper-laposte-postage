<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Request;

use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBodyJson;
use Scraper\Scraper\Request\RequestException;

#[Scraper(path: 'orders/cancel')]
class CancelOrderRequest extends LapostePostageRequest implements RequestBodyJson, RequestException
{
    public function __construct(
        string $token,
        protected readonly string $orderId
    ) {
        parent::__construct($token);
    }

    public function isThrow(): bool
    {
        return false;
    }

    public function getJson(): array
    {
        return [
            'orderId' => $this->orderId,
        ];
    }
}
