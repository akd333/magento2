<?php
namespace CB\Testimonial\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;

class Insert extends Template
{
	public function __construct(Context $context,
	\Magento\Store\Model\StoreManagerInterface $storeManager)
	{	
		$this->_storeManager = $storeManager;
		parent::__construct($context);
	}

	public function getBaseUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl();
    }
	public function getFormAction()
    {
        return 'testimonial/insert/post';
    }
}
