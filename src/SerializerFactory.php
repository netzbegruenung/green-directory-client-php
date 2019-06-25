<?php


namespace Netzbegruenung\GreenDirectory;

class SerializerFactory
{
    public static function create() : Serializer
    {
        return new Serializer(\JMS\Serializer\SerializerBuilder::create()
            ->setMetadataDirs([
                NETZBEGRUENUNG_GREEN_DIRECTORY_MODELS_SERIALIZER_PREFIX =>
                    NETZBEGRUENUNG_GREEN_DIRECTORY_MODELS_SERIALIZER_METADATA
            ])
            ->build());
    }
}