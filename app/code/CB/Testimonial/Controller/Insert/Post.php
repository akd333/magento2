<?php
  
namespace CB\Testimonial\Controller\Insert;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use CB\Testimonial\Model\DataFactory;
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
        $mobile = $post['title'];
        $message = $post['message'];

        //inserting data into database
        $dataModel->setName($name);
        $dataModel->setTitle($title);
        $dataModel->setMessage($message);
        $dataModel->save();

        // Display the succes message
        $this->messageManager->addSuccess(__('Thank You ... Your testimonial has been submited !!!'));
        
        // Redirect to suggestion page 
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('testimonial/index/view');
        return $resultRedirect;
    }
}