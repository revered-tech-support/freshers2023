<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Revered\Friends\Controller\Pray;

use Magento\Framework\App\Action\HttpGetActionInterface;

/**
 * Catalog index page controller.
 */
class Everyday extends \Magento\Framework\App\Action\Action
{
    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
       echo "friends pray everyday";
    }
}
