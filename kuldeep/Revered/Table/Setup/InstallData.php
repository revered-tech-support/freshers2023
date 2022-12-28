<?php
 
namespace Revered\Table\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
 
        $tableName = $setup->getTable('db_table');
        //Check for the existence of the table
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'name' => 'kuldeep',
                    'lastname' => 'kumawat',
                    'address' => 'dewas',
                    
                ],
                [
                    'name' => 'prateek',
                    'lastname' => 'mathane',
                    'address' => 'indore',
                    
                ],
                [
                    'name' => 'azhar',
                    'lastname' => 'khan',
                    'address' => 'indore',
                    
                ],
            ];
    
            foreach ($data as $item) {
                //Insert data
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        $setup->endSetup();
    }
}