<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class Invoicing
{
    private string $custAccNumber;
    private string $custInvoice;
    private string $contractNumber;

    private Contact $contact;

    public function __construct()
    {
        $this->contact = new Contact();
    }

    public function getCustAccNumber(): string
    {
        return $this->custAccNumber;
    }

    public function setCustAccNumber(string $custAccNumber): self
    {
        $this->custAccNumber = $custAccNumber;
        return $this;
    }

    public function getCustInvoice(): string
    {
        return $this->custInvoice;
    }

    public function setCustInvoice(string $custInvoice): self
    {
        $this->custInvoice = $custInvoice;
        return $this;
    }

    public function getContractNumber(): string
    {
        return $this->contractNumber;
    }

    public function setContractNumber(string $contractNumber): self
    {
        $this->contractNumber = $contractNumber;
        return $this;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }
}
