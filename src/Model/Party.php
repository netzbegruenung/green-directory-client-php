<?php

namespace Netzbegruenung\GreenDirectory\Model;

class Party implements ItemInterface
{
    /**
     * ISO 3166-1 Alpha-2 country code
     *
     * @var string
     */
    protected $country;

    /**
     * @var string
     * @see \Netzbegruenung\GreenDirectory\Model\Level
     */
    protected $level;

    /**
     * @var Url[]
     */
    protected $urls = [];

    /**
     * @var Email[]
     */
    protected $emails = [];

    public function __construct(string $country, string $level, array $urls, array $emails)
    {
        $this->country = $country;
        $this->level = $level;
        $this->urls = $urls;
        $this->emails = $emails;
    }

    public function getType() : string
    {
        return 'PARTY';
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
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