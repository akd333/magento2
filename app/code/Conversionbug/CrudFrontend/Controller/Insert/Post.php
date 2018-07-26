<?php
  
namespace Conversionbug\CrudFrontend\Controller\Insert;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Conversionbug\CrudFrontend\Model\DataFactory;
use Magento\Framework\Controller\ResultFactory;
  
class Post extends Action
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

        //getting values from form
        $post = $this->getRequest()->getPost();
        $name = $post['name'];
        $mobile = $post['mobile'];
        $email = $post['email'];
        $message = $post['message'];

        //inserting data into database
        $dataModel->setName($name);
        $dataModel->setMobile($mobile);
        $dataModel->setEmail($email);
        $dataModel->setMessage($message);
        $dataModel->save();

        // Display the succes message
        $this->messageManager->addSuccess(__('Thanks for your suggestion ... We will work on it soon!!!'));
        
        // Redirect to suggestion page 
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('crud/index/view');
        return $resultRedirect;
    }
}