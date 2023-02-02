<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Reveredtech\Azhar\Plugin;
/**
* Class AfterFooterPlugin
* @package Unit1\Plugins\Plugin
*/
class AfterFooterPlugin
{
/**
* @param \Magento\Theme\Block\Html\Footer $subject
* @param $result
* @return string
*/
public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
{
return 'Customized Reveredtech@copyright!';
}
}