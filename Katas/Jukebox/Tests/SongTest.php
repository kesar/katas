<?php

namespace Katas\Jukebox;

class SongTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Song
     */
    public $song;

    public function setUp()
    {
        $this->song = new Song();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Katas\Jukebox\Song', new Song());
    }

    public function testPlaySong()
    {
        $this->assertFalse($this->song->isPlayed());
        $this->song->play();
        $this->assertTrue($this->song->isPlayed());
    }

    protected function tearDown()
    {
        $this->song = null;
    }
}
