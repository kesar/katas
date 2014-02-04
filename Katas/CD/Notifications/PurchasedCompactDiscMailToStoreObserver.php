<?php

namespace Katas\CD\Notifications;

class PurchasedCompactDiscMailToStoreObserver implements ObserverInterface
{
    public function update($compactDisc)
    {
        // send email
        return true;
    }
}