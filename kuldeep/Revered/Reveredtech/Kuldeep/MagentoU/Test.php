<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Reveredtech\Kuldeep\MagentoU;
class Test
{
protected $justAParameter;
protected $data;
protected $unit1ProductRepository;

public function __construct(
\Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
\Magento\Catalog\Model\ProductFactory $productFactory,
\Magento\Checkout\Model\Session $session,
\Reveredtech\Kuldeep\Api\ProductRepositoryInterface $unit1ProductRepository,
$justAParameter = false,
array $data = []
) {
$this->justAParameter = $justAParameter;
$this->data = $data;
$this->unit1ProductRepository = $unit1ProductRepository;
}
}