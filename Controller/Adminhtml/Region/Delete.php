<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-12 21:47:12
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-12 22:22:47
 */

namespace PHPCuong\Region\Controller\Adminhtml\Region;

class Delete extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'PHPCuong_Region::region_delete';
    /**
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        // check if we know what should be deleted
        $region_id = $this->getRequest()->getParam('region_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($region_id) {
            $region_name = '';
            try {
                // init model and delete
                $model = $this->_objectManager->create('PHPCuong\Region\Model\Region');
                $model->load($region_id);
                $region_name = $model->getDefaultName();
                $model->delete();
                $this->messageManager->addSuccess(__('The '.$region_name.' Region has been deleted.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addError($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['region_id' => $region_id]);
            }
        }
        // display error message
        $this->messageManager->addError(__('Region to delete was not found.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}
