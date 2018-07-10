<?php
namespace Social\Share\Controller\Index;
class Printparam extends \Magento\Framework\App\Action\Action
{
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {   
        echo 'Pass parameters in the URL!';
        echo '<br>';
        echo '<br>Your ID is : ';
        echo $id = $this->getRequest ()->getParam ( 'id' );
        echo '<br>Your name is : ';
        echo $name = $this->getRequest ()->getParam ( 'name' );
    }
}