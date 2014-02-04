<?php

namespace Katas\CD\Notifications;

interface ObserverInterface
{
    public function update($item);
}