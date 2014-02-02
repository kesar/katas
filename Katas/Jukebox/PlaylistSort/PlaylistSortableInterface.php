<?php
namespace Katas\Jukebox\PlaylistSort;

interface PlaylistSortableInterface
{
    public function sort(array $itemsToSort);
}