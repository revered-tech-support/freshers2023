<?php

namespace ReveredPrateek\PrateekPrice\Block\Adminhtml\CallForPrice\Edit;


class Form extends \Magento\Backend\Block\Widget\Form\Generic
{

   
    protected $_systemStore;
   
    protected $_formFactory;
   
    protected $_status;

   
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Store\Model\System\Store $systemStore,
        \Adorncommerce\CallForPrice\Model\Config\Source\Status $status,
        array $data = []
    ) {
        $this->_systemStore = $systemStore;
        $this->_status = $status;
        parent::__construct($context, $registry, $formFactory, $data);
    }

   
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('callforprice');

        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            ['data' => ['id' => 'edit_form',
                        'action' => $this->getData('action'),
                        'method' => 'post',
                        'enctype'=>"multipart/form-data"]
            ]);

        $form->setHtmlIdPrefix('callforprice_');

        $fieldset = $form->addFieldset(
            'base_fieldset',
            [   'legend' => __('General Information'),
                'class' => 'fieldset-wide',
                'collapsable' => false]
        );

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        }
        $fieldset->addField(
            'customer_name',
            'text',
            ['name' => 'customer_name', 'label' => __('Customer Name'), 'title' => __('Customer Name'), 'required' => false]
        );

        $fieldset->addField(
            'customer_email',
            'text',
            ['name' => 'customer_email', 'label' => __('Customer Email'), 'title' => __('Customer Email'), 'required' => false]
        );
        $fieldset->addField(
            'comment',
            'textarea',
            ['name' => 'comment', 'label' => __('Comment'), 'title' => __('Comment'),'required' => false]
        );
        $fieldset->addField(
            'qty',
            'text',
            ['name' => 'qty', 'label' => __('Qty Needed'), 'title' => __('Qty Needed'), 'required' => false,'readonly' => true]
        );
        $fieldset->addField(
            'status',
            'select',
            ['name' => 'status', 'label' => __('status'), 'title' => __('status'),'values' => $this->_status->toOptionArray(), 'required' => false]
        );

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
