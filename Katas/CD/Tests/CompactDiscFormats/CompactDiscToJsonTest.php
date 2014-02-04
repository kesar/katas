<?php

namespace Katas\CD\CompactDiscFormats;

class CompactDiscToJsonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CompactDiscToJson
     */
    private $compactDiscToJson;

    public function setUp()
    {
        $this->compactDiscToJson = new CompactDiscToJson();
    }

    public function testFormatToJson()
    {
        $compactDiscMock = $this->getMock(
            'Katas\CD\CompactDisc',
            array('getTitle', 'getBand', 'getTrackList'),
            array(),
            '',
            false
        );
        $compactDiscMock->expects($this->once())->method('getTitle')->will($this->returnValue('titleCD'));
        $compactDiscMock->expects($this->once())->method('getBand')->will($this->returnValue('bandCD'));
        $compactDiscMock->expects($this->once())->method('getTrackList')->will($this->returnValue(array()));

        $formatResult = $this->compactDiscToJson->format($compactDiscMock);
        $this->assertStringStartsWith('{"title":"titleCD","band":"bandCD"', $formatResult);
    }

    protected function tearDown()
    {
        $this->compactDiscToJson = null;
    }
}

