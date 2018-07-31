<?php
namespace CB\Testimonial\Block;
use CB\Testimonial\Model\DataFactory;
class Update extends \Magento\Framework\View\Element\Template
{    
    protected $_modelDataFactory;
    protected $dataCollectionFactory;
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, 
        \Magento\Store\Model\StoreManagerInterface $storeManager,       
        \CB\Testimonial\Model\DataFactory $dataCollectionFactory,        
        array $data = []
    )
    {    
        $this->_storeManager = $storeManager;
        $this->_dataCollectionFactory = $dataCollectionFactory;    
        parent::__construct($context, $data);
    }
    
    public function getBaseUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl();
	}
	public function getFormAction()
    {
        return 'testimonial/update/post';
    }
    public function getDataCollection()
    {   
        $id = $this->getRequest()->getParam('id');
        $collection = $this->_dataCollectionFactory->create();
        $collection = $collection->load($id);
        return $collection;
    }
}
?>