<?php
  
namespace Social\Share\Setup;
  
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
  
class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
  
        if (version_compare($context->getVersion(), '1.0.7') < 0) {
            // Get emipro_sampletable table
            $tableName = $setup->getTable('new_table');
            // Check if the table already exists
            if ($setup->getConnection()->isTableExists($tableName) == true) {
                // Declare data
                $data = [
                        'name' => 'Ashish',
                        'title' => 'Dhar',
                        'email' => 'ashish.dhar@conversionbug.com'
                ];
  
                // Insert data to table
                // foreach ($data as $item) {
                //     $setup->getConnection()->update($tableName, $item);
                // }
                $setup->getConnection()->update($tableName,$data, 'entity_id IN (1)');
                //$setup->getConnection()->delete($tableName, 'entity_id IN (15)');
            }
        }
  
        $setup->endSetup();
    }
}