<?php

namespace Netzbegruenung\GreenDirectory\Tests;

use Netzbegruenung\GreenDirectory\Model\ItemInterface;
use Netzbegruenung\GreenDirectory\Serializer;
use Netzbegruenung\GreenDirectory\SerializerFactory;
use PHPUnit\Framework\TestCase;

class SerializerTest extends TestCase
{
    /**
     * @var Serializer
     */
    protected $serializer;

    public function setUp(): void
    {
        $this->serializer = SerializerFactory::create();
    }

    public function testDeserialize()
    {
       $items = iterator_to_array($this->serializer->deserializeFile(
            __DIR__ . '/green-directory/data/countries/de/nw/data.yaml'
       ));

       foreach ($items as $item) {
           $this->assertInstanceOf(ItemInterface::class, $item);
       }
    }
}
