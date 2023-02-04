<?php

namespace Revered\VendorEntity\Setup\Patch\Data;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;
/**
* @package Unit4\VendorEntity\Setup
*/

class Vendors implements DataPatchInterface
{
/**
* @var ModuleDataSetupInterface
*/
protected $moduleDataSetup;
/**
* Vendors constructor.
* @param ModuleDataSetupInterface $moduleDataSetup
*/
public function __construct(ModuleDataSetupInterface $moduleDataSetup)
{
$this->moduleDataSetup = $moduleDataSetup;
}
/**
* @return DataPatchInterface|void
*/
public function apply()
{
$this->moduleDataSetup->startSetup();
$this->moduleDataSetup->getConnection()->insert('vendor_entity',
[
'code'
=> 'Auchan',
'contact' => '380111223',
'goods_type'
=> 'food'
]
);
$this->moduleDataSetup->endSetup();
}

public static function getDependencies()
{
return [];
}

public function getAliases()
{
    return [];
}
}