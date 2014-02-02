<?php

namespace Katas\Jukebox;

class JukeboxTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Jukebox
     */
    public $jukebox;

    public function setUp()
    {
        $mock_playlist = $this->getMock('Katas\Jukebox\Playlist', array('getNextSong'));
        $mock_playlist->expects($this->any())
            ->method('getNextSong')
            ->will($this->returnValue($this->getMock('Katas\Jukebox\Song', array('play'))));
        $this->jukebox = new Jukebox($mock_playlist);
    }

    public function testAddSong()
    {
        $song_mock = $this->getMock('Katas\Jukebox\Song');
        $this->jukebox->addSong($song_mock);
    }

    public function testPlaySong()
    {
        $this->jukebox->playNext();
    }

    protected function tearDown()
    {
        $this->jukebox = null;
    }
}
