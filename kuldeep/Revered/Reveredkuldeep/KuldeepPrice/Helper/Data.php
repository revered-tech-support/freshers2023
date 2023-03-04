<?php

namespace Reveredkuldeep\KuldeepPrice\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Customer\Model\SessionFactory;
use Magento\Store\Model\ScopeInterface;
use Magento\Eav\Model\Entity\Attribute\Source\Boolean;


class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    const CONFIG_PATH_GENERAL_ENABLE = 'adorncommerce/general/enable_frontend';

    const CONFIG_PATH_GENERAL_CUSTOMER_GROUP = 'adorncommerce/general/customer_group';

    const CONFIG_PATH_GENERAL_EMAIL_SENDER = 'adorncommerce/general/email_sender';

    const CONFIG_PATH_GENERAL_SEND_EMAIL_TO = 'adorncommerce/general/send_email_cc';

    const CONFIG_PATH_GENERAL_BUTTON_TEXT = 'adorncommerce/general/button_text';

    const CONFIG_PATH_GENERAL_SEND_EMAIL = 'trans_email/ident_general/email';

    const CONFIG_PATH_GENERAL_EMAIL_CUSTOM_TEXT = 'adorncommerce/general/email_custom_text';

    /**
     * @var \Magento\Customer\Model\SessionFactory
     */
    private $customerSession;
    /**
     * @var \Magento\Framework\App\Http\Context
     */
    private $httpContext;

    /**
     * @param Context $context
     * @param SessionFactory $customerSession
     * @param \Magento\Framework\App\Http\Context $httpContext
     */
    public function __construct(
        Context $context,
        SessionFactory $customerSession
    )
    {
        $this->customerSession = $customerSession;
        parent::__construct($context);
    }

    /**
     * @param $config_path
     * @return mixed
     */
    public function getConfig($config_path)
    {
        return $this->scopeConfig->getValue(
            $config_path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function isModuleOutputDisabled()
    {
        $configEnabled = $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_ENABLE,
            ScopeInterface::SCOPE_STORE
        );
        $isOutputEnabled = $this->_moduleManager->isOutputEnabled('Reveredkuldeep_KuldeepPrice');

        return $configEnabled == Boolean::VALUE_NO || !$isOutputEnabled;
    }

    public function isAvailableForCustomer()
    {
        $currentGroupId = $this->customerSession->create()->getCustomer()->getGroupId();
        if(!$this->customerSession->create()->getCustomer()->getData()){
            $currentGroupId = 0;
        }
        $configEnabled = $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_CUSTOMER_GROUP
        );
        $configSelectedgroup = explode(",", $configEnabled);
        if (in_array($currentGroupId, $configSelectedgroup)) {
            return true;
        }
        return false;

    }

    public function senderEmailFrom()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_EMAIL_SENDER,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function senderEmailto()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_SEND_EMAIL_TO,
            ScopeInterface::SCOPE_STORE
        ) ?: $this->senderEmail();
    }

    public function senderEmail()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_SEND_EMAIL,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getButtonText()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_BUTTON_TEXT,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getEmailSender()
    {
        switch ($this->senderEmailFrom()) {
            case "general":
                $_path = "trans_email/ident_general/email";
                break;
            case "sales":
                $_path = "trans_email/ident_sales/email";
                break;
            case "support":
                $_path = "trans_email/ident_support/email";
                break;
            case "custom1":
                $_path = "trans_email/ident_custom1/email";
                break;
            case "custom2" :
                $_path = "trans_email/ident_custom2/email";
                break;
        }
        return $this->scopeConfig->getValue(
            $_path,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getEmailSendername()
    {

        switch ($this->senderEmailFrom()) {
            case "general":
                $_path = "trans_email/ident_general/name";
                break;
            case "sales":
                $_path = "trans_email/ident_sales/name";
                break;
            case "support":
                $_path = "trans_email/ident_support/name";
                break;
            case "custom1":
                $_path = "trans_email/ident_custom1/name";
                break;
            case "custom2" :
                $_path = "trans_email/ident_custom2/name";
                break;
        }
        return $this->scopeConfig->getValue(
            $_path,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function isEnable($product)
    {
        $enable = $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_ENABLE,
            ScopeInterface::SCOPE_STORE
        );
        if ($enable && $product && $this->isAvailableForCustomer()) {
            return true;
        } else {
            return false;
        }
    }

    public function getEmailCustomText()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_EMAIL_CUSTOM_TEXT,
            ScopeInterface::SCOPE_STORE
        );
    }

}
