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

    public function testGetNextSong()
    {
        $song = $this->getMock('Katas\Jukebox\Song');
        $song2 = $this->getMock('Katas\Jukebox\Song');
        $this->playlist->addSong($song);
        $this->playlist->addSong($song2);
        $nextSong = $this->playlist->getNextSong();
        $this->assertEquals($nextSong, $song2);
    }

    /**
     * @expectedException Katas\Jukebox\Exceptions\UnableToFindNextSongException
     */
    public function testGetNextSongThrowException()
    {
        $this->playlist->getNextSong();
    }

    public function testGetCurrentSongIndex()
    {
        $this->assertEquals(0, $this->playlist->getCurrentSongIndex());
    }

    public function testIncreaseCurrentSongIndex()
    {
        $this->testGetCurrentSongIndex();
        $this->playlist->increaseCurrentSongIndex();
        $this->assertEquals(1, $this->playlist->getCurrentSongIndex());
    }

    public function testResetCurrentSongIndex()
    {
        $this->testGetCurrentSongIndex();
        $this->testIncreaseCurrentSongIndex();
        $this->playlist->resetCurrentSongIndex();
        $this->assertEquals(0, $this->playlist->getCurrentSongIndex());
    }

    public function testGetSongsInPlaylist()
    {
        $this->assertEquals(0, count($this->playlist->getSongs()));
    }

    public function testSetSongsInPlaylist()
    {
        $song_mock = $this->getMock('Katas\Jukebox\Song');
        $this->testGetSongsInPlaylist();
        $this->playlist->setSongs(array($song_mock));
        $this->assertEquals(1, count($this->playlist->getSongs()));
    }

    protected function tearDown()
    {
        $this->playlist = null;
    }
}
