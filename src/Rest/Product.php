<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class Product
{
    private string $productCode;
    /** @var array<int, ProductOptions> */
    private ProductOptions $productOptions;
    private Contact $sender;
    private Contact $receiver;

    public function __construct()
    {
        $this->sender = new Contact();
        $this->receiver = new Contact();
        $this->productOptions = new ProductOptions();
    }

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): self
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getProductOptions(): ProductOptions
    {
        return $this->productOptions;
    }

    public function setProductOptions(ProductOptions $productOptions): self
    {
        $this->productOptions = $productOptions;
        return $this;
    }

    public function getSender(): Contact
    {
        return $this->sender;
    }

    public function getReceiver(): Contact
    {
        return $this->receiver;
    }
}
