<?php
namespace Social\Share\Controller\Index;

class Redirect extends \Magento\Framework\App\Action\Action
{
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {   
        //redirect to contact page
        $this->_redirect('contact');
    }
}