<?php
namespace Revered\New\Controller\Testimonial;
use Magento\Framework\App\Action\Action;
class Bykuldeep extends Action
{
protected $_pageFactory;
public function __construct(
\Magento\Framework\App\Action\Context $context,
\Magento\Framework\View\Result\PageFactory $pageFactory)
{
$this->_pageFactory = $pageFactory;
parent::__construct($context);
}
public function execute()
{
  // echo "hii";die;
return $this->_pageFactory->create();
}
}

?>

<?php
// namespace Revered\New\Controller\Show;

// use Magento\Framework\App\Action\Action;
// use Magento\Framework\App\Action\Context;
// use Magento\Framework\View\Result\PageFactory;
// use \Magento\Framework\App\Bootstrap;



// class Good extends Action
// {
    
//     protected $_pageFactory;
   
//     public function __construct(PageFactory $pageFactory, Context $context)
//     {
       
//         $this->_pageFactory = $pageFactory;
      
//         parent::__construct($context);
//     }

//     public function execute()

//     {     
//         return $this->_pageFactory->create();
//     }
// }

