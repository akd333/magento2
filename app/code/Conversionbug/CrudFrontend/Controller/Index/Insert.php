<?php
  
namespace Conversionbug\CrudFrontend\Controller\Index;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Conversionbug\CrudFrontend\Model\DataFactory;
use Magento\Framework\Controller\ResultFactory;
  
class Insert extends Action
{
    
    protected $_modelDataFactory;

    public function __construct(
        Context $context,
        DataFactory $modelDataFactory,
        ResultFactory $resultFactory
    ) {
        $this->resultFactory = $resultFactory;
        $this->_modelDataFactory = $modelDataFactory;
        parent::__construct($context);
    }
  
    public function execute()
    {
        $dataModel = $this->_modelDataFactory->create();
        //$dataCollection = $dataModel->getCollection();

        //getting values from form
        $name = $this->getRequest()->getPostValue("name");
        $mobile = $this->getRequest()->getPostValue("mobile");
        $email = $this->getRequest()->getPostValue("email");
        $message = $this->getRequest()->getPostValue("message");        
        
        //inserting data into database
        $dataModel->setData('name', $name);
        $dataModel->setData('mobile', $mobile);
        $dataModel->setData('email', $email);
        $dataModel->setData('message', $message);
        $dataModel->save();

        // Display the succes form validation message
        $this->messageManager->addSuccess(__('Thanks for your suggestion ... We will work on it soon!!!'));
        
        // Redirect to suggestion page 
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('crud/index/index');
        return $resultRedirect;
    }
}