<?php

namespace Revered\Create\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData 
 *
 * @package Thecoachsmb\Mymodule\Setup
 */
class InstallData implements InstallDataInterface
{
    /**
     * Creates sample articles
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $conn = $setup->getConnection(); 
        $tableName = $setup->getTable('my_table');

        $data = [
            [
                'name' => 'azhar',
                'lastname' => 'pathan',
                'email' => 'az@gmil.com',
                'password' => 123,
            ],
            [
                'name' => 'kuldeep',
                'lastname' => 'kumawat',
                'email' => 'kul@gmail',
                'password' => 456,
            ],
            [
                'name' => 'prateek',
                'lastname' => 'mathane',
                'email' => 'prateek@gmail',
                'password' => 789,
            ],
        ];
        
           $conn->insertMultiple($tableName, $data); 
           $setup->endSetup(); } }


