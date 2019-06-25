<?php

namespace Netzbegruenung\GreenDirectory\Model;

class RegionalChapter implements ItemInterface, ExternalRefAwareInterface
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     * @see \Netzbegruenung\GreenDirectory\Model\Level
     */
    protected $level;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string|null
     */
    protected $state;

    /**
     * @var string|null
     */
    protected $district;

    /**
     * @var string|null
     */
    protected $city;

    /**
     * @var string|null
     */
    protected $region;

    /**
     * @var Url[]
     */
    protected $urls = [];

    /**
     * @var Email[]
     */
    protected $emails = [];

    /**
     * @var ExternalRef[]
     */
    protected $externalRefs = [];

    public function __construct(
        string $name,
        ?string $level,
        string $country,
        ?string $state,
        ?string $district,
        ?string $city,
        ?string $region,
        array $urls = [],
        array $emails = [],
        array $externalRefs = []
    ) {
        $this->name = $name;
        $this->level = $level;
        $this->country = $country;
        $this->state = $state;
        $this->district = $district;
        $this->city = $city;
        $this->region = $region;
        $this->urls = $urls;
        $this->emails = $emails;
        $this->externalRefs = $externalRefs;
    }

    public function getType() : string
    {
        return 'REGIONAL_CHAPTER';
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @return Url[]
     */
    public function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @return Email[]
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @return ExternalRef[]
     */
    public function getExternalRefs(): array
    {
        return $this->externalRefs;
    }
}
