<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::POST, scheme: Scheme::HTTPS, host: 'apim-gw-vente.extra.laposte.fr', path: '/{postage}/v1/')]
abstract class LapostePostageRequest extends ScraperRequest implements RequestHeaders
{
    private bool $sandbox = false;

    public function __construct(
        protected readonly string $token
    ) {}

    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json',
        ];
    }

    public function getPostage(): string
    {
        if ($this->sandbox) {
            return 'postageDiscover';
        }
        return 'postage';
    }

    public function setSandbox(bool $sandbox): self
    {
        $this->sandbox = $sandbox;
        return $this;
    }
}
