<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-11 20:57:08
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-12 22:10:30
 */

namespace PHPCuong\Region\Controller\Adminhtml;

abstract class Region extends \Magento\Backend\App\Action
{
    /**
     * Mass Action Filter
     *
     * @var \Magento\Ui\Component\MassAction\Filter
     */
    protected $_filter;
    /**
     * Collection Factory
     *
     * @var PHPCuong\Region\Model\ResourceModel\Region\CollectionFactory
     */
    protected $_collectionFactory;

    protected $resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory  = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @return $this
     */
    protected function _initAction()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
