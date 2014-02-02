<?php

namespace Katas\Jukebox;

class PlaylistTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Playlist
     */
    public $playlist;

    public function setUp()
    {
        $this->playlist = new Playlist();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Katas\Jukebox\Playlist', new Playlist());
    }

    public function addSong()
    {
        $song = $this->getMock('Katas\Jukebox\Song');
        $this->playlist->addSong($song);
    }

    protected function tearDown()
    {
        $this->playlist = null;
    }
}
