<?php
  
namespace Conversionbug\CrudFrontend\Controller\Delete;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Conversionbug\CrudFrontend\Model\DataFactory;
use Magento\Framework\Controller\ResultFactory;
  
class Index extends Action
{
    protected $_messageManager;
    protected $_modelDataFactory;

    public function __construct(
        Context $context,
        DataFactory $modelDataFactory,
        ResultFactory $resultFactory,
        \Magento\Framework\Message\ManagerInterface $messageManager
    ) {
        $this->resultFactory = $resultFactory;
        $this->_modelDataFactory = $modelDataFactory;
        $this->_messageManager = $messageManager;
        parent::__construct($context);
    }
  
    public function execute()
    {
        $dataModel = $this->_modelDataFactory->create();
        //$dataCollection = $dataModel->getCollection();

        //fetching record from table
        $id = $this->getRequest()->getParam('id');
        $dataModel = $this->_modelDataFactory->create();
        $dataModel->load($id);
        $dataModel->delete();

        // Display the succes message
        $this->messageManager->addSuccess(__('Data removed successfully !!!'));
        
        // Redirect to suggestion page 
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('crud/index/view');
        return $resultRedirect;
    }
}