<?php

namespace Netzbegruenung\GreenDirectory\Model;

class Email
{
    /**
     * @var string
     */
    protected $address;

    public function __construct(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
}