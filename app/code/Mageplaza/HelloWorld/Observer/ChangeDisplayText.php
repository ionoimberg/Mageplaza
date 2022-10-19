<?php

namespace Mageplaza\HelloWorld\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $dddddd = $observer->getData('mp_text');
        echo $dddddd->getAaa() . " - Event </br>";
        $dddddd->setAaa('Execute event successfully.');

        return $this;
    }
}
