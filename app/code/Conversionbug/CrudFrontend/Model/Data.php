<?php
  
namespace Conversionbug\CrudFrontend\Model;
  
use Magento\Framework\Model\AbstractModel;
  
class Data extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Conversionbug\CrudFrontend\Model\ResourceModel\Data');
    }
}
