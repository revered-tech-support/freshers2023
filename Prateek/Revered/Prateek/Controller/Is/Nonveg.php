<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Revered\Prateek\Controller\Is;

use Magento\Framework\App\Action\Action;
class Nonveg extends Action
{
    /**
     * Show Contact Us page
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        echo 'my love is non veg';
        exit();
    }
}
