<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class Order
{
    private ?string $custPurchaseOrderNumber = null;
    private Invoicing $invoicing;
    private Offer $offer;

    public function __construct()
    {
        $this->invoicing = new Invoicing();
        $this->offer = new Offer();
    }

    public function getCustPurchaseOrderNumber(): ?string
    {
        return $this->custPurchaseOrderNumber;
    }

    public function setCustPurchaseOrderNumber(?string $custPurchaseOrderNumber): self
    {
        $this->custPurchaseOrderNumber = $custPurchaseOrderNumber;
        return $this;
    }

    public function getInvoicing(): Invoicing
    {
        return $this->invoicing;
    }

    public function getOffer(): Offer
    {
        return $this->offer;
    }
}
