<?php 
namespace Revered\Equipment\Setup;
 
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
 
class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        //$installer = $setup;
        $setup->startSetup();
        $tableName = $setup->getTable('Equipment');
        //Check for the existence of the table
        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'Post_ID'
                )
                ->addColumn(
                    'equipment_name',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Equipment_Name'
                )
                ->addColumn(
                    'equipment_manufacturing_date',
                    Table::TYPE_DATE,
                    null,
                    ['nullable' => false],
                    'Equipment_Manufacturing_Date'
                )                
                //Set comment for magetop_blog table
                ->setComment('Magetop Blog Table')
                //Set option for magetop_blog table
                ->setOption('type', 'InnoDB')
                ->setOption('charset', 'utf8');
                $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }
}
