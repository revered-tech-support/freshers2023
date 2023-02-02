<?php
/**
*
* Copyright © 2019 Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Reveredtech\Azhar\Plugin;
/**
* Class BeforeBreadcrumbsPlugin
* @package Unit1\Plugins\Plugin
*/
class BeforeBreadcrumbsPlugin
{
/**
* @param \Magento\Theme\Block\Html\Breadcrumbs $subject
* @param $crumbName
* @param $crumbInfo
* @return array
*/
public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject,
$crumbName, $crumbInfo)
{
$crumbInfo['label'] = $crumbInfo['label'].'(!before plugin)';
return [$crumbName, $crumbInfo];
}
}