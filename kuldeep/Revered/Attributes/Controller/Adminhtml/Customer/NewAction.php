<?php

namespace Revered\Attributes\Controller\Adminhtml\Customer;


class NewAction extends \Revered\Attributes\Controller\Adminhtml\Customer\Attribute
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->createForwardResult()->forward('edit');
    }
}
