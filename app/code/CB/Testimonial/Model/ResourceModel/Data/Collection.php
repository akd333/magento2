<?php
  
namespace Conversionbug\CrudFrontend\Model\ResourceModel\Data;
  
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
  
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Conversionbug\CrudFrontend\Model\Data',
            'Conversionbug\CrudFrontend\Model\ResourceModel\Data'
        );
    }
}