<?php
namespace Social\Share\Observer;
use Magento\Framework\Event\ObserverInterface;
class Triggerevent implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		echo "This is observer";
	}
}