<?php
namespace Reveredazhar\AzharPrice\Block\Adminhtml;


class CallForPrice extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_callforprice';
        $this->_blockGroup = 'Reveredazhar_AzharPrice';
        $this->_headerText = __('Call For Price');
        parent::_construct();
    }

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}