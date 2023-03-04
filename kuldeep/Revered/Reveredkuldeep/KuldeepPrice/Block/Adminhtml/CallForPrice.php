<?php
namespace Reveredkuldeep\KuldeepPrice\Block\Adminhtml;

class CallForPrice extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_callforprice';
        $this->_blockGroup = 'Reveredkuldeep_KuldeepPrice';
        $this->_headerText = __('Call For Price');
        parent::_construct();
    }

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}