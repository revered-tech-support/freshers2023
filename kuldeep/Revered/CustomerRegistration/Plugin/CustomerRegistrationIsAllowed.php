<?php
declare(strict_types=1);

namespace Revered\CustomerRegistration\Plugin;

use Revered\CustomerRegistration\Model\Config;
use Magento\Customer\Model\Registration;


class CustomerRegistrationIsAllowed
{
    /**
     * @var Config
     */
    private $moduleConfig;

    /**
     * CustomerRegistrationIsAllowed constructor.
     *
     * @param Config $moduleConfig
     */
    public function __construct( Config $moduleConfig )
    {
        $this->moduleConfig = $moduleConfig;
    }

    /**
     * @param Registration $subject
     * @param                                      $result
     *
     * @return bool
     */
    public function afterIsAllowed( Registration $subject, $result): bool
    {
        return $this->moduleConfig->isEnable();
    }
}
