<?php 
namespace Revered\Vehicle\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Revered\Vehicle\Model\PostFactory;

class Example extends \Magento\Framework\View\Element\Template 
{
  
    public $postFactory;

    public function __construct(Context $context, 
    
    PostFactory $postFactory
    , array $data = [])
    {
        //echo 'In Block';
        $this->postFactory = $postFactory;
        //$this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }

      public function getHelloWorld() 
    {
        return "dewas says good morning";
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
    }
    

    
}












 
    
