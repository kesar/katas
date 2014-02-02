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
        $this->jukebox = new Jukebox();
    }

    public function testAddSong()
    {
        $song_mock = $this->getMock('Katas\Jukebox\Song');
        $this->jukebox->addSong($song_mock);
    }
}
