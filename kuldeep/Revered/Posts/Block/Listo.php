<?php 
namespace Revered\Posts\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Revered\Posts\Model\PostFactory;

class Listo extends Template 

{
    public $postFactory;

    public function __construct(Context $context, 
    
    PostFactory $postFactory
    , array $data = [])
    {
    
        $this->postFactory = $postFactory;
        
        parent::__construct($context, $data);
    }

    public function sayWelcome()
    {
        return __('Welcome to cloudeways');
    }
     public function getCollection()
    {
	     $post = $this->postFactory->create();
		 $collection = $post->getCollection();
        
        //  foreach($collection as $item){
		// 	echo "<pre>";
		// 	print_r($item->getData());
             
		// 	echo "</pre>";   	
		// }
        return $collection;
        // return $this->postFactory->create();
        // return 'kuldeep';
    }   
}

