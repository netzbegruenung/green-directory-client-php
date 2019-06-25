<?php

namespace Netzbegruenung\GreenDirectory;

use Netzbegruenung\GreenDirectory\Model\ItemInterface;

interface IndexInterface
{
    public function add(ItemInterface $item) : void;

    public function find(string $reference) : iterable;
}