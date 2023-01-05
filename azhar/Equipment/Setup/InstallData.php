<?php
 namespace Revered\Equipment\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
 
        $tableName = $setup->getTable('Equipment');
        
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'equipment_name' => 'fan',
                    'equipment_manufacturing_date' => '01-02-2023'
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
