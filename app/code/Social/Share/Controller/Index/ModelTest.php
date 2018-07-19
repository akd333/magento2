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
        $item = $sampleModel->load(1);
        var_dump($item->getData());
        echo "<br>";
        //$sampleModel->setData('entity_id', '');
        $sampleModel->setName('Sreekr');
        $sampleModel->setTitle('Reddy');
        $sampleModel->setEmail('something@example.com');
        $sampleModel->save();
        $this->messageManager->addSuccess(__('Success'));
        try {
            $sampleModel = $this->_sampleFactory->create();
            $sampleModel->load(25);
            $sampleModel->delete();
            $sampleModel->save();
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
        // Get sample collection
        $sampleCollection = $sampleModel->getCollection();
        // Load all data of collection
        echo "<br>";
        print_r($sampleCollection->addFieldToFilter('name','Ashish')->getData());

    }
}