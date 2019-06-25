<?php

namespace Netzbegruenung\GreenDirectory\Tests;

use Netzbegruenung\GreenDirectory\Model\RegionalChapter;
use Netzbegruenung\GreenDirectory\Reader;
use Netzbegruenung\GreenDirectory\Repository;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    /**
     * @var Repository
     */
    protected $repository;

    public function setUp(): void
    {
        $this->repository = new Repository(new Reader(__DIR__ . '/green-directory/data'));
    }

    public function testAll()
    {
        /** @var RegionalChapter $ov */
        $ov = $this->repository->findBySherpaId('11002609');
        $this->assertInstanceOf(RegionalChapter::class, $ov);
        $this->assertEquals('Köln-Kalk', $ov->getCity());
    }
}
