<?php

namespace Katas\CD\Traits;

use Katas\CD\Notifications\ObserverInterface;

trait ObservableTrait
{
    private $observers = array();

    public function attachObserver($type, ObserverInterface $observer)
    {
        $this->observers[$type][] = $observer;
    }

    public function notifyObserver($type)
    {
        if (isset($this->observers[$type])) {
            foreach ($this->observers[$type] as $observer) {
                $observer->update($this);
            }
        }
    }

    public function getObservers($type)
    {
        return $this->observers[$type];
    }
}