<?php
namespace Conversionbug\CrudFrontend\Block;
use Conversionbug\CrudFrontend\Model\DataFactory;
class View extends \Magento\Framework\View\Element\Template
{    
    protected $_modelDataFactory;
    protected $dataCollectionFactory;
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, 
        \Magento\Store\Model\StoreManagerInterface $storeManager,       
        \Conversionbug\CrudFrontend\Model\ResourceModel\Data\CollectionFactory $dataCollectionFactory,        
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
    public function getDataCollection()
    {
        $collection = $this->_dataCollectionFactory->create();
        return $collection;
    }
}
?>