<?php
  
namespace Conversionbug\CrudFrontend\Model\ResourceModel;
  
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
  
class Data extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('crud_frontend', 'id');
    }
}