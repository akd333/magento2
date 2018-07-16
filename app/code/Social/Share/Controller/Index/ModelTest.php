<?php
  
namespace Social\Share\Controller\Index;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Social\Share\Model\SampleFactory;
  
class ModelTest extends Action
{
    /**
     * @var \Emipro\HelloWorld\Model\SampleFactory
     */
    protected $_modelSampleFactory;
  
    /**
     * @param Context $context
     * @param SampleFactory $modelSampleFactory
     */
    public function __construct(
        Context $context,
        SampleFactory $modelSampleFactory
    ) {
        parent::__construct($context);
        $this->_modelSampleFactory = $modelSampleFactory;
    }
  
    public function execute()
    {
        $sampleModel = $this->_modelSampleFactory->create();
  
        // Load the item with ID is 1
        //$item = $sampleModel->load(1);
        //var_dump($item->getData());
  
        // Get sample collection
        $sampleCollection = $sampleModel->getCollection();
        // Load all data of collection
        print_r($sampleCollection->getData());
    }
}