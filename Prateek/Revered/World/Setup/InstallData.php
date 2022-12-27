<?php
 
namespace Revered\World\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
 
        $tableName = $setup->getTable('newdb');
        //Check for the existence of the table
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'name' => 'Mukesh Chapagain',
                    'dob' => '1900-01-01',
                    'email' => 'mukesh@example.com'
                    
                ],
                [
                    'name' => 'Muk Cha',
                    'dob' => '1900-05-05',
                    'email' => 'mukcha@example.com'
                    
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