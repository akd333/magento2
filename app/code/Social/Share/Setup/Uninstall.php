<?php

namespace Social\Share\Setup;

use Magento\Framework\Setup\UninstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class Recurring implements UninstallSchemaInterface
{
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->query("DROP table newtable");

        $setup->endSetup();
    }
}