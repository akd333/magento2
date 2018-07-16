<?php
namespace Social\Share\Controller\Index;

class Event extends \Magento\Framework\App\Action\Action
{
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {   
        $this->_eventManager->dispatch('magento_event_display_test');
    }
}