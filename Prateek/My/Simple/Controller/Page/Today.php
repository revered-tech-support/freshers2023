<?php
namespace My\Simple\Controller\Page;

use Magento\Framework\App\Action\Action;
 use Magento\Framework\App\ResponseInterface;
 use My\Simple\Api\PencilInterface;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Api\ProductRepositoryInterface;
//use Magento\Framework\View\Result\PageFactory;
//use \Magento\Framework\App\Bootstrap;



class Today extends Action
{
    protected $pencilInterface;

    public function __construct(Context $context,PencilInterface $pencilInterface, ProductRepositoryInterface $productRepository  ) 
    {
        $this->pencilInterface =$pencilInterface;
        $this->productRepository =$productRepository;



        parent::__construct($context);
    }
    public function execute()

    {
       
       
        //  echo "in the";
       
        //   echo "hello world";
         //  echo $this->pencilInterface->getPencilType();
         //echo get_class($this->productRepository);
      //  return $this->pageFactory->create();
      $objectManager =\Magento\Framework\App\ObjectManager::getInstance();
      $pencil = $objectManager->create(type:'My\Simple\Model\Pencil');
      var_dump($pencil);
    //   $book = $objectManager->create(type:'My\Simple\Model\Book');
    //   var_dump($book);
    }
}
