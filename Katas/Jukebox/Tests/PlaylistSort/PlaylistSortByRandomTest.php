<?php

namespace Katas\Jukebox\PlaylistSort;

class PlaylistSortByRandomTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PlaylistSortByRandom
     */
    public $playlistSortByRandom;

    public function setUp()
    {
        $this->playlistSortByRandom = new PlaylistSortByRandom();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Katas\Jukebox\PlaylistSort\PlaylistSortByRandom', new PlaylistSortByRandom());
    }

    public function testSort()
    {
        $random_numbers = range(0, 50);
        $new_random_numbers = $this->playlistSortByRandom->sort($random_numbers);
        $this->assertNotEquals($new_random_numbers, $random_numbers);
    }

    protected function tearDown()
    {
        $this->playlistSortByRandom = null;
    }
}
