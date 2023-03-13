<?php
declare(strict_types=1);

namespace Revered\CustomerRegistration\Block\Form\Login;

use Revered\CustomerRegistration\Model\Config;
use Magento\Framework\View\Element\Template;


class Info extends Template
{
    /**
     * @var Config
     */
    private $moduleConfig;

    /**
     * Info constructor.
     *
     * @param Template\Context $context
     * @param Config           $moduleConfig
     * @param array            $data
     */
    public function __construct(
        Template\Context $context,
        Config $moduleConfig,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->moduleConfig = $moduleConfig;
    }

    /**
     * @return bool
     */
    public function canShowInfoBlock(): bool
    {
        return  $this->moduleConfig->canShowBlockInfo();
    }

    /**
     * @return bool
     */
    public function canRegister(): bool
    {
        return $this->moduleConfig->isEnable();
    }
}