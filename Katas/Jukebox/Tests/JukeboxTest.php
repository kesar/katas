<?php

namespace Katas\Jukebox;

use Katas\Jukebox\Exceptions\UnableToFindNextSongException;

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
            ->will(
                $this->onConsecutiveCalls(
                    $this->getMock('Katas\Jukebox\Song', array('play')),
                    $this->throwException($this->getMock('Katas\Jukebox\Exceptions\UnableToFindNextSongException')),
                    $this->throwException($this->getMock('Katas\Jukebox\Exceptions\UnableToFindNextSongException'))
                )
            );
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

    public function testPlaySongUnableToFindNextSongException()
    {
        $this->assertTrue($this->jukebox->playNext());
        $this->assertFalse($this->jukebox->playNext());
    }

    protected function tearDown()
    {
        $this->jukebox = null;
    }
}
