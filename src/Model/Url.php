<?php

namespace Netzbegruenung\GreenDirectory\Model;

class Url
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $url;

    public function __construct(string $type, string $url)
    {
        $this->type = $type;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
