<?php 
namespace Revered\CustomField\Setup;
 
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
 
class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // $installer = $setup;
        $setup->startSetup();
        $quote = $setup->getTable('quote');
        $salesorder = $setup->getTable('sales_order');

        $setup->getConnection()->addColumn(
            $quote,
            'delivery_note',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'nullable' => true,
                'comment' => 'Unique Id'
            ]
        ) ;
        $setup->getConnection()->addColumn(
            $quote,
            'delivery_note',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'nullable' => true,
                'comment' => 'Unique Id'
            ]
        ) ;

        $setup->endSetup();
    }
}