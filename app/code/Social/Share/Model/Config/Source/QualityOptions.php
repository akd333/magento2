<?php 
namespace Social\Share\Model\Config\Source;
  
use Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory;
use Magento\Framework\DB\Ddl\Table;
  
class QualityOptions extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{ 
    public function getAllOptions()
    {
        $this->_options = [ 
            ['label'=>'', 'value'=>''],
            ['label'=>'Low', 'value'=>'1'],
            ['label'=>'Good', 'value'=>'2'],
            ['label'=>'Premium', 'value'=>'3']
        ];
        return $this->_options;
    }
  
    /**
     * Get a text for option value
     *
     * @param string|integer $value
     * @return string|bool
     */
    public function getOptionText($value)
    {
        foreach ($this->getAllOptions() as $option) {
            if ($option['value'] == $value) {
                return $option['label'];
            }
        }
        return false;
    }
}