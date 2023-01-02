<?php

namespace Revered\Pro\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Revered\Pro\Model\PostFactory;

class Insert extends \Magento\Framework\View\Element\Template
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