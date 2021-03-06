<?php

namespace Katas\CD;

class CompactDiscTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CompactDisc
     */
    private $compactDisc;

    public function setUp()
    {
        $this->compactDisc = new CompactDisc('testNameCompactDisc', 'testNameBand');
    }

    public function testConstruct()
    {
        $this->assertInstanceOf(
            'Katas\CD\CompactDisc',
            new CompactDisc('testNameCompactDisc2', 'testNameBand2', array('song1', 'song2'))
        );
    }

    public function testGetCompactDiscTitle()
    {
        $this->assertEquals('testNameCompactDisc', $this->compactDisc->getTitle());
    }

    public function testGetCompactDiscBand()
    {
        $this->assertEquals('testNameBand', $this->compactDisc->getBand());
    }

    public function testGetCompactDiscTracks()
    {
        $this->assertEquals(array(), $this->compactDisc->getTrackList());
    }

    public function testGetCompactDiscInfo()
    {
        $compactDiscToJsonMock = $this->getMock(
            'Katas\CD\CompactDiscFormats\CompactDiscToFormatInterface',
            array('format')
        );
        $compactDiscToJsonMock->expects($this->any())->method('format')->will(
            $this->returnValue(
                json_encode(
                    array(
                        'title' => 'testNameCompactDisc',
                        'band' => 'testBandCompactDisc',
                        'trackList' => array()
                    )
                )
            )
        );
        $this->assertTrue(is_string($this->compactDisc->getInfo($compactDiscToJsonMock)));
    }

    public function testBuyCompactDisc()
    {
        $this->assertTrue($this->compactDisc->buy());
    }

    public function testAttachObserverToCompactDisc()
    {
        $observerMock = $this->getMock('Katas\CD\Notifications\ObserverInterface', array('update'));
        $this->compactDisc->attachObserver('purchased', $observerMock);
        $this->assertEquals(1, count($this->compactDisc->getObservers('purchased')));
    }

    public function testNotifyObserversOfCompactDisc()
    {
        $this->testAttachObserverToCompactDisc();
        $this->compactDisc->notifyObserver('purchased');
    }

    protected function tearDown()
    {
        $this->compactDisc = null;
    }
}
