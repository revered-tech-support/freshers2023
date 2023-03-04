<?php
namespace ReveredPrateek\PrateekPrice\Block;

class CallForPrice extends \Magento\Framework\View\Element\Template
{
    
    protected $customerSession;
  
    protected $_registry;
   
    protected $customerRepository;
   
    protected $addressRepository;



     public function __construct(
         \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
         \Magento\Customer\Api\AddressRepositoryInterface $addressRepository,
         \Magento\Framework\Registry $registry,
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\SessionFactory $customerSession,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->addressRepository = $addressRepository;
        $this->customerRepository = $customerRepository;
        $this->customerSession = $customerSession;
        $this->_registry = $registry;
    }

  
    public function getCustomerData(){

         if($this->customerSession->create()->isLoggedIn()){
             return $this->customerSession->create()->getCustomer();
         }
    }
    public function getCurrentProduct()
    {
        return $this->_registry->registry('current_product');
    }
}