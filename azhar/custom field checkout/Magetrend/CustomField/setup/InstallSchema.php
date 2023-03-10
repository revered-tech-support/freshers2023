<?php 
namespace Magtrend\CustomField\Setup;
 
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
            'upload_files',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_FILES,
                'nullable' => true,
                'comment' => 'Unique Id'
            ]
        ) ;
        $setup->getConnection()->addColumn(
            $quote,
            'upload_files',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_FILES,
                'nullable' => true,
                'comment' => 'Unique Id'
            ]
        ) ;

        $setup->endSetup();
    }
}