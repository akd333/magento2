<?php

namespace Conversionbug\ContactOverride\Block;

use Magento\Framework\View\Element\Template;

class ContactForm extends \Magento\Contact\Block\ContactForm
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
    }
    public function getFormAction()
    {   
        echo "hello";
        return $this->getUrl('contact/index/post', ['_secure' => true]);
    }
}
