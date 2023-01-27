<?php

namespace Take\Dependency\Controller\From;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
// use Take\Dependency\NotMagento\PencilInterface;
use Take\Dependency\Api\PencilInterface;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Take\Dependency\Model\PencilFactory;
//use Magento\Framework\View\Result\PageFactory;
//use \Magento\Framework\App\Bootstrap;

class Hello extends Action
{
  protected $pencilInterface;
  protected $productRepositoryInterface;
  protected $pencilFactory;

    public function __construct(Context $context,PencilInterface $pencilInterface,
    ProductRepositoryInterface $productRepository, PencilFactory $pencilFactory)
    {
        $this->pencilInterface =$pencilInterface;
        $this->productRepository =$productRepository;
        $this->pencilFactory = $pencilFactory;


        parent::__construct($context);
    } 
  
   public function execute()
     {
      // $pencil = $this->pencilFactory->create(array("name"=>"kuldeep"));
      // var_dump($pencil);
      // echo get_class($this->productRepository);
      // echo $this->pencilInterface->getPencilType();
        //  echo 'hello';
      $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
      $student = $objectManager->create(type:"Take\Dependency\Model\Student");
      var_dump($student);


      // $pencil = $objectManager->create(type:"Take\Dependency\Model\Pencil");
      // var_dump($pencil);
      // $book = $objectManager->create(type:"Take\Dependency\Model\Book");
      // var_dump($book);
    }
}?>


