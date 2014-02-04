<?php

namespace Katas\CD\CompactDiscFormats;

class CompactDiscToXmlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CompactDiscToXml
     */
    private $compactDiscToXml;

    public function setUp()
    {
        $this->compactDiscToXml = new CompactDiscToXml();
    }

    public function testFormatToXml()
    {
        $compactDiscMock = $this->getMock(
            'Katas\CD\CompactDisc',
            array('getTitle', 'getBand', 'getTrackList'),
            array('titleCD', 'bandCD')
        );
        $compactDiscMock->expects($this->once())->method('getTitle')->will($this->returnValue('titleCD'));
        $compactDiscMock->expects($this->once())->method('getBand')->will($this->returnValue('bandCD'));
        $compactDiscMock->expects($this->once())->method('getTrackList')->will($this->returnValue(array()));

        $formatResult = $this->compactDiscToXml->format($compactDiscMock);
        $this->assertNotEquals(false, $formatResult);
        if ($formatResult !== false) {
            $formatToXml = simplexml_load_string($formatResult);
            $this->assertNotEquals(false, $formatToXml);
        }
    }

    protected function tearDown()
    {
        $this->compactDiscToXml = null;
    }
}
