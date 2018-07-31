<?php
  
namespace Social\Share\Model\ResourceModel\Sample;
  
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
  
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Social\Share\Model\Sample',
            'Social\Share\Model\ResourceModel\Sample'
        );
    }
}