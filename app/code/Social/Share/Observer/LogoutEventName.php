<?php
namespace Social\Share\Observer;
use Magento\Framework\Event\ObserverInterface;
class LogoutEventName implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
        $customer = $observer->getEvent()->getCustomer();
        echo 'Thank you for visiting us ';
        echo ucfirst($customer->getFirstname()); //Get customer name
        echo '<br>';
        echo 'Your logout time is  ';
        echo date('h:i:s a', time());;
        exit;
	}
}