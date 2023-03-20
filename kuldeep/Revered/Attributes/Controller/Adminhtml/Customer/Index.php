<?php

namespace Revered\Attributes\Controller\Adminhtml\Customer;


class Index extends \Revered\Attributes\Controller\Adminhtml\AbstractAction
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->createPageResult();
        $resultPage->setActiveMenu('Revered_Attributes::customer_attributes');
        $resultPage->getConfig()->getTitle()->prepend(__('Customer Attributes'));
        $resultPage->addBreadcrumb(__('Customer Attributes'), __('Customer Attributes'));
        return $resultPage;
    }


    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Revered_Attributes::customer_attributes');
    }
}