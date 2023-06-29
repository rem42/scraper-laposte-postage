<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class ClientReference
{
    private ?string $cref1 = null;
    private ?string $cref2 = null;
    private ?string $productLabel = null;

    public function getCref1(): ?string
    {
        return $this->cref1;
    }

    public function setCref1(?string $cref1): self
    {
        $this->cref1 = $cref1;
        return $this;
    }

    public function getCref2(): ?string
    {
        return $this->cref2;
    }

    public function setCref2(?string $cref2): self
    {
        $this->cref2 = $cref2;
        return $this;
    }

    public function getProductLabel(): ?string
    {
        return $this->productLabel;
    }

    public function setProductLabel(?string $productLabel): self
    {
        $this->productLabel = $productLabel;
        return $this;
    }
}
