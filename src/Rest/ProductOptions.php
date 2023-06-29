<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class ProductOptions
{
    private ?int $weight = null;
    private ClientReference $clientReference;
    private bool $deliveryTrackingFlag;
    private array $services;

    public function __construct()
    {
        $this->clientReference = new ClientReference();
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function getClientReference(): ClientReference
    {
        return $this->clientReference;
    }

    public function isDeliveryTrackingFlag(): bool
    {
        return $this->deliveryTrackingFlag;
    }

    public function setDeliveryTrackingFlag(bool $deliveryTrackingFlag): self
    {
        $this->deliveryTrackingFlag = $deliveryTrackingFlag;
        return $this;
    }

    public function getServices(): array
    {
        return $this->services;
    }

    public function setServices(array $services): self
    {
        $this->services = $services;
        return $this;
    }
}
