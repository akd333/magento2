<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Conversionbug\Override\Block\Form;

use Magento\Customer\Model\AccountManagement;

class Register extends \Magento\Directory\Block\Data
{
    public function blockTest()
    {
        echo "Block overridden";
    }
}
