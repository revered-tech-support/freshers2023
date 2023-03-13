<?php
namespace Revered\Shippingbar\Controller\Adminhtml\Entity;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;


class MassEnable extends \Revered\Shippingbar\Controller\Adminhtml\Entity implements HttpPostActionInterface
{
    /**
     * @var \Magento\Ui\Component\MassAction\Filter
     */
    protected $filter;

    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Revered\Shippingbar\Model\EntityFactory $entityFactory,
        \Magento\Ui\Component\MassAction\Filter $filter
    ) {
        parent::__construct($context, $coreRegistry, $entityFactory);
        $this->filter = $filter;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $collection = $this->filter->getCollection($this->entityFactory->create()->getCollection());
        foreach ($collection as $item) {
            $item->setIsActive(true);
            $item->save();
        }
        try {
            $this->messageManager->addSuccess(__('A total of %1 record(s) have been enabled.', $collection->getSize()));
        } catch (\Exception $e) {
            $this->messageManager->addExceptionMessage($e, __('Something went wrong. Please try again.'));
        }

        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}
