<?php


namespace ReveredPrateek\Prateekprice\Setup\Patch\Data;

use Magento\Catalog\Ui\DataProvider\Product\ProductCollectionFactory;
use Magento\Customer\Model\Customer;
use Magento\Eav\Model\Config;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;
use Psr\Log\LoggerInterface;


class HidePriceAttribute implements DataPatchInterface, PatchRevertableInterface
{
    
    private $moduleDataSetup;

    
    private $eavSetupFactory;

    
    private $productCollectionFactory;

    
    private $logger;

    
    private $eavConfig;

  
    private $attributeResource;

    
    public function __construct(
        EavSetupFactory $eavSetupFactory,
        Config $eavConfig,
        LoggerInterface $logger,
        \Magento\Customer\Model\ResourceModel\Attribute $attributeResource,
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->eavConfig = $eavConfig;
        $this->logger = $logger;
        $this->attributeResource = $attributeResource;
        $this->moduleDataSetup = $moduleDataSetup;
    }

    
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        $this->addCallForPriceAttribute();
        $this->moduleDataSetup->getConnection()->endSetup();
    }

   
    public function addCallForPriceAttribute()
    {
        $eavSetup = $this->eavSetupFactory->create();
    
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY, 'hide_price_active',
            [
                'group' => 'Product Details',
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Hide  Price',
                'input' => 'boolean',
                'class' => '',
                'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => true,
                'unique' => false
            ]
        );
    }

    
    public static function getDependencies()
    {
        return [];
    }

   
    public function revert()
    {
    }

    public function getAliases()
    {
        return [];
    }
}
