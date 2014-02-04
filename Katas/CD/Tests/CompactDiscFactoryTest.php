<?php

namespace Katas\CD;

class CompactDiscFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var CompactDiscFactory
     */
    private $compactDiscFactory;

    public function setUp()
    {
        $this->compactDiscFactory = new CompactDiscFactory();
    }
    public function testBuildCD()
    {
        $compactDisc = $this->compactDiscFactory->build('CD');
        $this->assertInstanceOf('Katas\CD\CompactDisc', $compactDisc);
    }

    public function testBuildEnhancedCD()
    {
        $compactDisc = $this->compactDiscFactory->build('EnhancedCD');
        $this->assertInstanceOf('Katas\CD\EnhancedCompactDisc', $compactDisc);
    }
}