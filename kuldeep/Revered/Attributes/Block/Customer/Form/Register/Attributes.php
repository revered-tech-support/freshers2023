<?php


namespace Revered\Attributes\Block\Customer\Form\Register;


class Attributes extends  \Revered\Attributes\Block\Customer\Form\Attributes
{

    /**
     * @var string
     */
    protected $code = "customer_account_create";

    /**
     * Path to template file in theme.
     *
     * @var string
     */
    protected $_template = "Revered_Attributes::customer/form/register/attributes.phtml";
}
