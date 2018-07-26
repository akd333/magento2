<?php
  
namespace Conversionbug\ContactOverride\Model;
  
use Magento\Framework\Model\AbstractModel;
  
class Data extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Conversionbug\ContactOverride\Model\ResourceModel\Data');
    }
}
