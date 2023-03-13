<?php
namespace Revered\Shippingbar\Controller\Adminhtml\Entity;

use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;


class NewAction extends \Revered\Shippingbar\Controller\Adminhtml\Entity implements HttpGetActionInterface
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
