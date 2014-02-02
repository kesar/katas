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
        $this->song->play();
    }

    protected function tearDown()
    {
        $this->song = null;
    }
}
