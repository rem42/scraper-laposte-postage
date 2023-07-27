<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Model;

class CancelProduct
{
    public string $itemId;
    public string $status;
    /** @var array<int, Error> */
    public array $errors;
    public string $services;
    public string $soCode;
    public string $asCode;
    public string $offerCode;
    public string $offerVersion;
    public string $productCode;
}
