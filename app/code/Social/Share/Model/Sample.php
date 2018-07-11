<?php
  
namespace Social\Share\Model;
  
use Magento\Framework\Model\AbstractModel;
  
class Sample extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Social\Share\Model\ResourceModel\Sample');
    }
}
