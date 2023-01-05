<?php 
namespace Revered\Posts\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Revered\Posts\Model\PostFactory;

class Addpost extends Template 
{
    public $postFactory;

    public function __construct(Context $context, 
    
    PostFactory $postFactory
    , array $data = [])
    {
    
        $this->postFactory = $postFactory;
        
        parent::__construct($context);
    }

    
     public function execute()
    {
        // echo "hello";die;
	     return $this->postFactory->create();
		 
        
        
    
        
    }   
}




