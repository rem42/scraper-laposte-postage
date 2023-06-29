<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class MasterOutputOptions
{
    private string $visualFormatCode;

    public function getVisualFormatCode(): string
    {
        return $this->visualFormatCode;
    }

    public function setVisualFormatCode(string $visualFormatCode): self
    {
        $this->visualFormatCode = $visualFormatCode;
        return $this;
    }
}
