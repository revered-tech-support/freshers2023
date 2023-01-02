<?php
namespace Revered\About\Block; 
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
// use Revered\About\Model\ResourceModel\Post\CollectionFactory;
use Revered\About\Model\PostFactory;

class Me extends Template
{

    public $collection;
    public $postFactory;

    public function __construct(Context $context, 
    // CollectionFactory $collectionFactory
    PostFactory $postFactory, array $data = [])
    {
        //echo 'In Block';
        $this->postFactory = $postFactory;
        //$this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection()
    {
	     $post = $this->postFactory->create();
		 $collection = $post->getCollection();
        
        //  foreach($collection as $item){
		// 	echo "<pre>";
		// 	print_r($item->getData());
             
		// 	echo "</pre>";
            // $po = $collection->toArray();
            // print_r($po);
            	
		//}
   
    return $collection ;

    
}
}
