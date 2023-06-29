<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class Offer
{
    private string $offerCode;
    private MasterOutputOptions $masterOutputOptions;
    /** @var array<int, Product> */
    private array $products = [];

    public function __construct()
    {
        $this->masterOutputOptions = new MasterOutputOptions();
    }

    public function getOfferCode(): string
    {
        return $this->offerCode;
    }

    public function setOfferCode(string $offerCode): self
    {
        $this->offerCode = $offerCode;
        return $this;
    }

    public function getMasterOutputOptions(): MasterOutputOptions
    {
        return $this->masterOutputOptions;
    }

    /**
     * @return array<int, Product>
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        $this->products[] = $product;
        return $this;
    }
}
