<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Revered\Dewas\Controller\Ismy;

use Magento\Framework\App\Action\Action;
class Hometown extends Action
{
    /**
     * Show Contact Us page
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        echo 'dewas is my home town';
        exit();
    }
}
