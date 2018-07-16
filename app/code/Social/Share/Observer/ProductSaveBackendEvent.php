<?php
namespace Social\Share\Observer;
use Magento\Framework\Event\ObserverInterface;
use \Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;
class ProductSaveBackendEvent implements \Magento\Framework\Event\ObserverInterface
{
	protected $_logger;
	protected $_messageManager;
    	public function __construct(
		\Magento\Framework\Message\ManagerInterface $messageManager,
		\Psr\Log\LoggerInterface $logger //log injection
		//array $data = []
   	 ) {
		$this->_logger = $logger;
		//parent::__construct($data);
		//parent::__construct($context);
        	$this->_messageManager = $messageManager;
   	 }
	public function execute(\Magento\Framework\Event\Observer $observer)
	{	
		$name = $observer->getProduct()->getName();
		//$this->_logger->addDebug('some text or variable');
		$this->_messageManager->addSuccess(__("You have just saved $name"));
		//return $this;
	}
}
