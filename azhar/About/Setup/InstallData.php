<?php
namespace Revered\About\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
	protected $_contactFactory;
 
	public function __construct(\Revered\About\Model\ContactFactory $contactFactory)
	{
		$this->_contactFactory = $contactFactory;
	}
 
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
            'project_name' => 'application',
                                'project_type' => 'software',
                             'project_date' => '26-12-22'
		];
		$contact = $this->_contactFactory->create();
		$contact->addData($data)->save();
	}
} 
// namespace Revered\About\Setup;
 
// use Magento\Framework\Setup\InstallDataInterface;
// use Magento\Framework\Setup\ModuleContextInterface;
// use Magento\Framework\Setup\ModuleDataSetupInterface;
 
// class InstallData implements InstallDataInterface
// {
 
//     public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
//     {
//         $setup->startSetup();
 
//         $tableName = $setup->getTable('about_table');
//         //Check for the existence of the table
//         if ($setup->getConnection()->isTableExists($tableName) == true) {
//             $data = [
//                 [
//                     'project_name' => 'application',
//                     'project_type' => 'software',
//                     'project_date' => '26-12-22'
          
//                 ]
                
//             ];
    
//             foreach ($data as $item) {
//                 //Insert data
//                 $setup->getConnection()->insert($tableName, $item);
//             }
//         }
//         $setup->endSetup();
//     }
// }

 
