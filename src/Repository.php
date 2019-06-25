<?php

namespace Netzbegruenung\GreenDirectory;

use Netzbegruenung\GreenDirectory\Model\ExternalRef\Type;
use Netzbegruenung\GreenDirectory\Model\ExternalRefAwareInterface;
use Netzbegruenung\GreenDirectory\Model\ItemInterface;

class Repository
{
    protected $reader;

    protected $index;

    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    protected static function getSherpaId(ItemInterface $item) : ?string
    {
        if ($item instanceof ExternalRefAwareInterface) {
            foreach ($item->getExternalRefs() as $ref) {
                if ($ref->getType() == Type::SHERPA) {
                    return $ref->getKey();
                }
            }
        }

        return null;
    }

    protected function index()
    {
        if ($this->index === null) {
            $this->index = [];
            foreach ($this->reader->all() as $item) {
                $ref = self::getSherpaId($item);
                if ($ref !== null) {
                    $this->index[$ref] = $item;
                }
            }
        }
    }

    public function findBySherpaId(string $id) : ?ItemInterface
    {
        $this->index();

        if (isset($this->index[$id])) {
            return $this->index[$id];
        }

        return null;
    }
}
