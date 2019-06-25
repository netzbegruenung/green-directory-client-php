<?php

namespace Netzbegruenung\GreenDirectory\Tests;

use Netzbegruenung\GreenDirectory\Reader;
use PHPUnit\Framework\TestCase;

class ReaderTest extends TestCase
{
    /**
     * @var Reader
     */
    protected $reader;

    public function setUp(): void
    {
        $this->reader = new Reader(__DIR__ . '/green-directory/data');
    }

    public function testAll()
    {
       $items = iterator_to_array($this->reader->all());
       $this->assertGreaterThan(1, count($items));
    }
}
