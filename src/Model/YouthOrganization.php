<?php

namespace Netzbegruenung\GreenDirectory\Model;

class YouthOrganization implements ItemInterface
{
    /**
     * @var string|null
     */
    protected $level;

    /**
     * @var string|null
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

    public function __construct(
        ?string $level,
        ?string $country,
        ?string $state,
        ?string $district,
        ?string $city,
        ?string $region,
        array $urls = [],
        array $emails = []
    ) {
        $this->level = $level;
        $this->country = $country;
        $this->state = $state;
        $this->district = $district;
        $this->city = $city;
        $this->region = $region;
        $this->urls = $urls;
        $this->emails = $emails;
    }

    public function getType() : string
    {
        return 'YOUTH_ORGANIZATION';
    }

    /**
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
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
}