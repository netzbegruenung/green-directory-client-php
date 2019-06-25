<?php

namespace Netzbegruenung\GreenDirectory\Model;

class ExternalRef
{
    /**
     * @var string
     * @see \Netzbegruenung\GreenDirectory\Model\ExternalRef\Type
     */
    protected $type;

    /**
     * @var string
     */
    protected $key;

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
    public function getKey(): string
    {
        return $this->key;
    }
}