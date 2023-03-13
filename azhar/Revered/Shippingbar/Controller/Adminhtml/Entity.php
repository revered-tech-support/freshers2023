<?php
namespace Revered\Shippingbar\Controller\Adminhtml;


abstract class Entity extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session.
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Revered_Shippingbar::free_shipping_bar_management';

    /**
     * Current free shipping bar entity
     */
    const REGISTRY_KEY_CURRENT_ENTITY = 'current_sparsh_free_shipping_bar_entity';

    /**
     * @var \Magento\Framework\Registry
     */
    protected $coreRegistry;

  
    protected $entityFactory;


    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Revered\Shippingbar\Model\EntityFactory $entityFactory
    ) {
        parent::__construct($context);
        $this->coreRegistry = $coreRegistry;
        $this->entityFactory = $entityFactory;
    }

    /**
     * Init action.
     *
     * @return $this
     */
    protected function _initAction()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Magento_Backend::marketing')
            ->_addBreadcrumb(__('Sparsh Free Shipping Bar'), __('Sparsh Free Shipping Bar'));
        return $this;
    }
}
