<?php

namespace Katas\CD;

use Katas\CD\CompactDiscFormats\CompactDiscToFormatInterface;

abstract class CompactDiscAbstract
{
    use Traits\ObservableTrait;

    private $title;
    private $band;
    private $trackList = array();

    public function buy()
    {
        $this->notifyObserver('purchased');
        return true;
    }

    /**
     * @param string $band
     */
    public function setBand($band)
    {
        $this->band = $band;
    }

    /**
     * @return string
     */
    public function getBand()
    {
        return $this->band;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param array $trackList
     */
    public function setTrackList(array $trackList)
    {
        $this->trackList = $trackList;
    }

    /**
     * @return array
     */
    public function getTrackList()
    {
        return $this->trackList;
    }

    public function getInfo(CompactDiscToFormatInterface $compactDiscToFormat)
    {
        return $compactDiscToFormat->format($this);
    }
}