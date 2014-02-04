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
        $this->assertStringStartsWith(
            '<?xml version="1.0"?>' . "\n" . '<root><titleCD>title</titleCD><bandCD>band</bandCD></root>',
            $formatResult
        );
    }

    protected function tearDown()
    {
        $this->compactDiscToXml = null;
    }
}
