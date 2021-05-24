<?php


namespace Printq\FirstModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class OurObserver implements ObserverInterface
{

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $message = $observer->getData('greeting');
        $message->setGreeting('Good Afternoon');
    }
}
