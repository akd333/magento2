<?php
namespace Social\Share\Observer;
use Magento\Framework\Event\ObserverInterface;
class LoginEventName implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
        $customer = $observer->getEvent()->getCustomer();
        echo ucfirst($customer->getFirstname()); //Get customer name
        exit;
	}
}