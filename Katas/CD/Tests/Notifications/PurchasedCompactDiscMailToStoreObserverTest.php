<?php

namespace Katas\CD\Notifications;

class PurchasedCompactDiscMailToStoreObserverTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var PurchasedCompactDiscMailToStoreObserver
     */
    private $purchasedCompactDiscMailToStoreObserver;

    public function setUp()
    {
        $this->purchasedCompactDiscMailToStoreObserver = new PurchasedCompactDiscMailToStoreObserver();
    }

    public function testSendEmailWithUpdate()
    {
        $compactDiscMock = $this->getMock('Katas\CD\CompactDisc', array(),  array(), '', false);
        $this->assertTrue($this->purchasedCompactDiscMailToStoreObserver->update($compactDiscMock));
    }

    protected function tearDown()
    {
        $this->purchasedCompactDiscMailToStoreObserver = null;
    }
}