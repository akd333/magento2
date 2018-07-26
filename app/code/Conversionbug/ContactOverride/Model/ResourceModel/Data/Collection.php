<?php
  
namespace Conversionbug\ContactOverride\Model\ResourceModel\Data;
  
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
  
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Conversionbug\ContactOverride\Model\Data',
            'Conversionbug\ContactOverride\Model\ResourceModel\Data'
        );
    }
}