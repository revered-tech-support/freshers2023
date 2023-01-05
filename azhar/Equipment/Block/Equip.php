<?php
namespace Revered\Equipment\Block; 
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
// use Revered\About\Model\ResourceModel\Post\CollectionFactory;
use Revered\Equipment\Model\PostFactory;

class Equip extends Template
{

    public $collection;
    public $postFactory;

    public function __construct(Context $context, 
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
        
    return $collection ;

    
}
}
