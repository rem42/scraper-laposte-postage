<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Model;

class CancelOrderResponse
{
    public CancelResult $cancelResult;
    /** @var array<int, Error> */
    public array $errors;
}
