<?php

namespace Netzbegruenung\GreenDirectory;

class Reader
{
    /**
     * @var string
     */
    protected $directory;

    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct(
        string $directory,
        Serializer $serializer = null,
        array $indizes = []
    ) {
        $this->directory = $directory;

        if ($serializer === null) {
            $serializer = SerializerFactory::create();
        }

        $this->serializer = $serializer;
        $this->indizes = $indizes;
    }

    private function findFiles() : iterable
    {
        $iterator = new \RecursiveDirectoryIterator($this->directory);

        /** @var \SplFileInfo $item */
        foreach (new \RecursiveIteratorIterator($iterator) as $item) {
            if (in_array($item->getExtension(), ['yaml', 'yml'])) {
                yield $item->getPathname();
            }
        }

        yield from [];
    }

    public function all() : iterable
    {
        foreach ($this->findFiles() as $file) {
            foreach ($this->serializer->deserializeFile($file) as $item) {
                yield $item;
            }
        }

        yield from [];
    }
}
