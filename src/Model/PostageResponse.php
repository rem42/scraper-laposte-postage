<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Model;

class PostageResponse
{
    public \DateTimeInterface $orderRequestDate;
    public Order $order;
    /** @var array<int, Error> */
    public array $errors;
}
