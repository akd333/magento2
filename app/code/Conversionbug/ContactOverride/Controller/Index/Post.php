<?php

namespace Conversionbug\ContactOverride\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Conversionbug\ContactOverride\Model\DataFactory;
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

        //getting values from form
        $post = $this->getRequest()->getPost();
        
            $name = $post['name'];
            $email = $post['email'];
            $telephone = $post['telephone'];
            $comment = $post['comment'];
            if (!empty($post)) {
            //inserting data into database
            $dataModel->setName($name);
            $dataModel->setEmail($email);
            $dataModel->setTelephone($telephone);
            $dataModel->setComment($comment);
            $dataModel->save();

            // Display the succes message
            $this->messageManager->addSuccessMessage(__('Thanks for contacting us with your comments and questions. We\'ll respond to you very soon.'));
            
            // Redirect to suggestion page 
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setPath('contact/index', ['_secure' => true]);
            return $resultRedirect;
        }
    }
}
