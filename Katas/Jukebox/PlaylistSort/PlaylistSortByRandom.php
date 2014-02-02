<?php

namespace Katas\Jukebox\PlaylistSort;

class PlaylistSortByRandom implements PlaylistSortableInterface
{
    public function sort(array $itemsToSort)
    {
        shuffle($itemsToSort);
        return $itemsToSort;
    }
}
