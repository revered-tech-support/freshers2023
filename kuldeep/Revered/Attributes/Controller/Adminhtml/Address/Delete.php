<?php

namespace Revered\Attributes\Controller\Adminhtml\Address;

class Delete extends \Revered\Attributes\Controller\Adminhtml\Address\Attribute
{
    /**
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('attribute_id');
        $resultRedirect = $this->createRedirectResult();
        if ($id) {
            $model = $this->_objectManager->create(\Magento\Customer\Model\Attribute::class);

            // entity type check
            $model->load($id);
            if ($model->getEntityTypeId() != $this->entityTypeId) {
                $this->messageManager->addErrorMessage(__('We can\'t delete the attribute.'));
                return $resultRedirect->setPath('cam/*/');
            }

            try {
                $attributeCode = $model->getAttributeCode();
                $model->delete();
                $this->messageManager->addSuccessMessage(__('You deleted the address attribute: "%1".', $attributeCode));
                return $resultRedirect->setPath('cam/*/');
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $resultRedirect->setPath(
                    'cam/*/edit',
                    ['attribute_id' => $this->getRequest()->getParam('attribute_id')]
                );
            }
        }
        $this->messageManager->addErrorMessage(__('We can\'t find an attribute to delete.'));
        return $resultRedirect->setPath('cam/*/');
    }
}
