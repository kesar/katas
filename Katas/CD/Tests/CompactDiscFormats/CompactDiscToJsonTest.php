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
        $compactDiscMock = $this->getMock('Kata\CD\CompactDisc', array('getTitle', 'getBand', 'getTrackList'));
        $compactDiscMock->expects($this->any())->method('getTitle')->will($this->returnValue('titleCD'));
        $compactDiscMock->expects($this->any())->method('getBand')->will($this->returnValue('bandCD'));
        $compactDiscMock->expects($this->any())->method('getTrackList')->will($this->returnValue(array()));

        $formatResult = $this->compactDiscToJson->format($compactDiscMock);

    }
}

