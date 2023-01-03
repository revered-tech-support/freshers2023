<?php
namespace Revered\Vehicle\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Revered\Vehicle\Model\PostFactory;

class AddVehicle extends \Magento\Framework\View\Element\Template
{
    public $postFactory;
    //public $postLoader;

    public function __construct(
        Context $context,
        PostFactory $postFactory,
        array $data = []
    ) {
        $this->postFactory = $postFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->postFactory->create();
    }
}