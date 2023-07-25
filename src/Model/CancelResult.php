<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Model;

class CancelResult
{
    public string $status;
    public \DateTimeInterface $cancelRequestDate;
    public string $cancellationId;
}
