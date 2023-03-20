<?php

namespace Revered\Attributes\Controller\Adminhtml\Address;


class Index extends \Revered\Attributes\Controller\Adminhtml\AbstractAction
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->createPageResult();
        $resultPage->setActiveMenu('Revered_Attributes::address_attributes');
        $resultPage->getConfig()->getTitle()->prepend(__('Customer Address Attributes'));
        $resultPage->addBreadcrumb(__('Customer Address Attributes'), __('Customer Address Attributes'));
        return $resultPage;
    }


    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Revered_Attributes::address_attributes');
    }
}