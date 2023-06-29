<?php declare(strict_types=1);

namespace Scraper\ScraperLaPostePostage\Rest;

class Address
{
    private string $name1;
    private ?string $add2 = null;
    private ?string $add3 = null;
    private string $add4;
    private ?string $add5 = null;
    private string $zipcode;
    private string $town;
    private string $countryCode;

    public function getName1(): string
    {
        return $this->name1;
    }

    public function setName1(string $name1): self
    {
        $this->name1 = $name1;
        return $this;
    }

    public function getAdd2(): ?string
    {
        return $this->add2;
    }

    public function setAdd2(?string $add2): self
    {
        $this->add2 = $add2;
        return $this;
    }

    public function getAdd3(): ?string
    {
        return $this->add3;
    }

    public function setAdd3(?string $add3): self
    {
        $this->add3 = $add3;
        return $this;
    }

    public function getAdd4(): string
    {
        return $this->add4;
    }

    public function setAdd4(string $add4): self
    {
        $this->add4 = $add4;
        return $this;
    }

    public function getAdd5(): ?string
    {
        return $this->add5;
    }

    public function setAdd5(?string $add5): self
    {
        $this->add5 = $add5;
        return $this;
    }

    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    public function getTown(): string
    {
        return $this->town;
    }

    public function setTown(string $town): self
    {
        $this->town = $town;
        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
