<?php
 
namespace Revered\Pro\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
 
        $tableName = $setup->getTable('prateekdb');
        //Check for the existence of the table
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'service_name' => 'prateek',
                    'service_type' => 'engg.',
                    'service_date' => '2-12-1998',
                    
                ],
                [
                    'service_name' => 'kuldeep',
                    'service_type' => 'engg.',
                    'service_date' => '1-11-1970',
                    
                ],
                [
                    'service_name' => 'azhar',
                    'service_type' => 'heavy devloper',
                    'service_date' => '2-10-2000',
                    
                ],
                [
                    'service_name' => 'faraz',
                    'service_type' => 'magento devloper',
                    'service_date' => '3-10-1998',
                    
                ],
                [
                    'service_name' => 'shaikh',
                    'service_type' => 'engg.',
                    'service_date' => '3-10-1998',
                    
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