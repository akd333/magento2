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
        //$item = $sampleModel->load(11);
        //$sampleModel->delete(11);
        //$sampleModel->save();

        // var_dump($item->getData());
        // echo "<br>";
        // $sampleModel->setData('entity_id', '');
        // $sampleModel->setName('Sreekr');
        // $sampleModel->setTitle('Reddy');
        // $sampleModel->setEmail('something@example.com');
        // $sampleModel->save();
        // $this->messageManager->addSuccess(__('Success'));
        // try {
        //     $sampleModel = $this->_sampleFactory->create();
        //     $sampleModel->load(25);
        //     $sampleModel->delete();
        //     $sampleModel->save();
        // } catch (\Exception $e) {
        //     $this->messageManager->addError($e->getMessage());
        // }
        // Get sample collection
        $sampleCollection = $sampleModel->getCollection();
        // Load all data of collection
        // echo "<br>";
        // print_r($sampleCollection->addFieldToFilter('name','Ashish')->getData());

        //$collection = $sampleModel->getData();
        echo "<br>";

        // and
        echo "get datya of 10 and 14";
        echo "<br>";
        print_r($sampleCollection->addFieldToFilter('entity_id', array('eq' => '14'))->addFieldToFilter('entity_id', array('eq' => '25'))->getData());
        echo "<br>";

        // or
        echo "get data having id 10 or 14";
        echo "<br>";
        print_r($sampleCollection->addFieldToFilter('entity_id', array('eq' => '10'))->addFieldToFilter('entity_id', array('eq' => '14'))->getData());        echo "<br>";

        // get data having id 2
        // echo "<br>";
        // print_r($sampleCollection->addFieldToFilter('entity_id','2')->getData());
        // echo "<br>";
        // // get data having id 10
        // echo "<br>";
        // print_r($sampleCollection->addFieldToFilter('entity_id', array('eq' => '10'))->getData());
        // echo "<br>";
        // // get data having id other than 10
        // print_r($sampleCollection->addFieldToFilter('entity_id', array('neq' => '10'))->getData());
        // echo "<br>";
        // // get data having id grater than equals to 20
        // print_r($sampleCollection->addFieldToFilter('entity_id',array('gteq'=>'20'))->getData());
        // echo "<br>";
        // // get data having id less than equals to 5
        // print_r($sampleCollection->addFieldToFilter('entity_id',array('lteq'=>'5'))->getData());
        // echo "<br>";
        // // get data having name like ...ash...       
        // print_r($sampleCollection->addFieldToFilter('name',array('like' => '%ash%'))->getData());
        // echo "<br>";
        // // get data having name not like ...ash...       
        // print_r($sampleCollection->addFieldToFilter('name',array('nlike' => '%ash%'))->getData());
        // echo "<br>";
        // // get data having id 10 to 16
        // print_r($sampleCollection->addFieldToFilter('entity_id',array('from' => '10','to' => '16','name' => true))->getData());
    }
}