<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Reveredtech\Azhar\Plugin;
/**
* Class AfterPricePlugin
* @package Unit1\Plugins\Plugin
*/
class AfterPricePlugin
{
/**
* @param \Magento\Catalog\Model\Product $subject
* @param $result
* @return mixed
*/
public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
{
return $result + 0.458925;
}
}