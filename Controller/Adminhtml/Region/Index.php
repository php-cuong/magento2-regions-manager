<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-11 21:02:32
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-13 16:00:34
 */

namespace PHPCuong\Region\Controller\Adminhtml\Region;

class Index extends \PHPCuong\Region\Controller\Adminhtml\Region
{
    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        $resultPage = $this->_initAction();
        $resultPage->addBreadcrumb(
            'Regions Manager',
            'Regions Manager'
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Customers'));
        $resultPage->getConfig()->getTitle()
            ->prepend('Regions Manager');
        return $resultPage;
    }
}
