<?php
  
namespace Conversionbug\CrudFrontend\Controller\Insert;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Conversionbug\CrudFrontend\Model\DataFactory;
  
class Index extends Action
{
    protected $_objectManager;
    protected $_modelDataFactory;
  
    public function __construct(Context $context,DataFactory $modelDataFactory,\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        parent::__construct($context);
        $this->_modelDataFactory = $modelDataFactory;
        $this->_objectManager = $objectManager;
    }
  
    public function execute()
    {
        $dataModel = $this->_modelDataFactory->create();
        $dataCollection = $dataModel->getCollection();

        //Get form data
        $post = (array) $this->getRequest()->getPostValue();

            // Retrieve your form data
            $name = $post['name'];
            $mobile = $post['mobile'];
            $email = $post['email'];
            $message = $post['message'];

            // insert data...
            //$dataModel->setId('');
            $dataModel = $this->_objectManager->create('Conversionbug\ContactOverride\Model\Data');
            $dataModel->setName($name);
            $dataModel->setMobile($mobile);
            $dataModel->setEmail($email);
            $dataModel->setMessage($message);
            $dataModel->save();

            // Display the succes form validation message
            $this->messageManager->addSuccess(__('Thanks for your suggestion ... We will work on it soon!!!'));
            // Redirect to form page 
            //$resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            //$resultRedirect->setUrl('/crud/insert/index');

            //return $resultRedirect;


    }
}