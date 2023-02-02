<?php
/**
*
* Copyright © 2019 Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Reveredtech\Azhar\Plugin;
/**
* Class AroundBreadcrumbsPlugin
* @package Unit1\Plugins\Plugin
*/
class AroundBreadcrumbsPlugin
{
    /**
* @param \Magento\Theme\Block\Html\Breadcrumbs $subject
* @param callable $proceed
* @param $crumbName
* @param $crumbInfo
*/
public function aroundAddCrumb(
    \Magento\Theme\Block\Html\Breadcrumbs $subject, callable $proceed,
    $crumbName, $crumbInfo
    )
    {
    $crumbInfo['label'] = $crumbInfo['label'].'(!around plugin)';
    $proceed($crumbName, $crumbInfo);
    }
}