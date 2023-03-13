<?php
namespace Revered\Shippingbar\Block\Entity;


class FreeShippingBar extends \Magento\Framework\View\Element\Template
{
   
    private $barDataHelper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Locale\CurrencyInterface $localeCurrency,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Revered\Shippingbar\Helper\Data $barDataHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->localeCurrency = $localeCurrency;
        $this->storeManager = $storeManager;
        $this->barDataHelper = $barDataHelper;
    }

    /**
     * Retrieve config value.
     *
     * @return string
     */
    public function getConfig($config)
    {
        return $this->barDataHelper->getConfig($config);
    }

    /**
     * Retrieve current currency symbol.
     *
     * @return string
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getCurrentCurrencySymbol()
    {
        $currencyCode =  $this->storeManager->getStore()->getCurrentCurrencyCode();
        $currencySymbol = $this->localeCurrency->getCurrency($currencyCode)->getSymbol();
        return $currencySymbol;
    }

    /**
     * Retrieve shipping bar data.
     *
     * @return bool|mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getFreeShippingBar()
    {
        return $this->barDataHelper->getShippingBar();
    }

    /**
     * Retrieve shipping bar data by entity id.
     *
     * @param $entityId
     * @return array|bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getFreeShippingBarByEntityId($entityId)
    {
        return $this->barDataHelper->getShippingBarByEntityId($entityId);
    }
}
