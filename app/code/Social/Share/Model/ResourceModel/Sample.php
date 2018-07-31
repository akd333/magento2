<?php
  
namespace Social\Share\Model\ResourceModel;
  
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
  
class Sample extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('new_table', 'entity_id');
    }
}