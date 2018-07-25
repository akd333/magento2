<?php
  
namespace Conversionbug\CrudFrontend\Controller\Insert;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Conversionbug\CrudFrontend\Model\dataFactory;
  
class Insert extends Action
{
    protected $_modelDataFactory;
  
    public function __construct(Context $context,DataFactory $modelDataFactory,\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        parent::__construct($context);
        $this->_modelDataFactory = $modelDataFactory;
    }
  
    public function execute()
    {
        $dataModel = $this->_modelDataFactory->create();
        $dataCollection = $dataModel->getCollection();

        //Get form data
        $post = (array) $this->getRequest()->getPostValue();

        // Retrieve your form data
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        echo "$name";
        exit;
        // insert data...
        //$dataModel->setId('');
        $dataModel->setName('Ashish');
        $dataModel->setMobile('8888888888');
        $dataModel->setEmail('udfyuefuyhfeehfhb');
        $dataModel->setMessage('yhudceduyh');
        $dataModel->save();

        // Display the succes form validation message
        $this->messageManager->addSuccess(__('Thanks for your suggestion ... We will work on it soon!!!'));
        // Redirect to form page 
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl('/crud/index/index');
        return $resultRedirect;

    }
}
