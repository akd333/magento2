<?php
namespace Social\Share\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {   
        echo 'This is Controller!';
        echo '<br>';
        //print helper function
        $this->_objectManager->create('Social\Share\Helper\Data')->HelperFunc();
        //redirect to contact page
        $this->_redirect('contact');
    }
}