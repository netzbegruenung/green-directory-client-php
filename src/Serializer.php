<?php

namespace Netzbegruenung\GreenDirectory;

use JMS\Serializer\SerializerInterface;
use Netzbegruenung\GreenDirectory\Model\ItemInterface;
use Netzbegruenung\GreenDirectory\Model\Party;
use Netzbegruenung\GreenDirectory\Model\Person;
use Netzbegruenung\GreenDirectory\Model\RegionalChapter;
use Netzbegruenung\GreenDirectory\Model\YouthOrganization;

final class Serializer
{
    protected $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param string $file
     * @return ItemInterface[]
     * @throws UnknownTypeException
     */
    public function deserializeFile(string $file) : iterable
    {
        return $this->deserializeArray(yaml_parse_file($file, -1));
    }

    /**
     * @param string $data
     * @return ItemInterface[]
     * @throws UnknownTypeException
     */
    public function deserialize(string $data) : iterable
    {
        return $this->deserializeArray(yaml_parse($data, -1));
    }

    /**
     * @param array[] $documents
     * @return ItemInterface[]
     * @throws UnknownTypeException
     */
    public function deserializeArray(array $documents) : iterable
    {
        foreach ($documents as $document) {
            $class = null;
            switch ($document['type']) {
                case 'PARTY':
                    $class = Party::class;
                    break;
                case 'PERSON':
                    $class = Person::class;
                    break;
                case 'REGIONAL_CHAPTER':
                    $class = RegionalChapter::class;
                    break;
                case 'YOUTH_ORGANIZATION':
                    $class = YouthOrganization::class;
                    break;
            }

            if ($class === null) {
                continue;
            }

            unset($document['type']);

            yield $this->serializer->deserialize(
                json_encode($document),
                $class,
                'json'
            );
        }

        yield from [];
    }
}