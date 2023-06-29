<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class Contact
{
    private string $email;
    private string $phone;
    private Address $address;

    public function __construct()
    {
        $this->address = new Address();
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
