<?php

namespace Netzbegruenung\GreenDirectory\Model;

interface ExternalRefAwareInterface
{
    /**
     * @return ExternalRef[]
     */
    public function getExternalRefs() : array;
}