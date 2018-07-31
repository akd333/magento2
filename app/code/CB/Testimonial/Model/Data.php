<?php
  
namespace CB\Testimonial\Model;
  
use Magento\Framework\Model\AbstractModel;
  
class Data extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('CB\Testimonial\Model\ResourceModel\Data');
    }
}
