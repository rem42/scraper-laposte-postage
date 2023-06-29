<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Model;

class Order
{
    public string $orderId;
    public string $custPurchaseOrderNumber;
    public Offer $offer;
}
