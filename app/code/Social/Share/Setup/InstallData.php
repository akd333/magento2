<?php

namespace Social\Share\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
        $setup->startSetup();
        $tableName = $setup->getTable('new_table');
		$data = [
            [
                'name' => 'Ashish',
                'title' => 'Dhar',
            ]    
        ];
		// Insert data to table
        foreach ($data as $item) {
            $setup->getConnection()->insert($tableName, $item);
        }
	}
}