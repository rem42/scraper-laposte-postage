<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestException;

#[Scraper(method: Method::GET, path: 'orders/cancel/{cancellationId}')]
class InformationCancelOrderRequest extends LapostePostageRequest implements RequestException
{
    public function __construct(
        string $token,
        protected readonly string $cancellationId
    ) {
        parent::__construct($token);
    }

    public function isThrow(): bool
    {
        return false;
    }

    public function getCancellationId(): string
    {
        return $this->cancellationId;
    }
}
