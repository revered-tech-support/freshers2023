<?php

namespace Revered\Attributes\Block\Customer\Form\Edit;


class Attributes extends  \Revered\Attributes\Block\Customer\Form\Attributes
{

    /**
     * @var string
     */
    protected $code = "customer_account_edit";

    /**
     * Path to template file in theme.
     *
     * @var string
     */
    protected $_template = "Revered_Attributes::customer/form/edit/attributes.phtml";
}
