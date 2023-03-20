<?php

namespace Revered\Attributes\Controller\Adminhtml\Address;


class NewAction extends \Revered\Attributes\Controller\Adminhtml\Address\Attribute
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->createForwardResult()->forward('edit');
    }
}
