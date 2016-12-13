<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-11 23:42:05
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-12 19:10:27
 */

namespace PHPCuong\Region\Model;

class Region extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Cache tag
     *
     * @var string
     */
    const CACHE_TAG = 'directory_country_region';
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('PHPCuong\Region\Model\ResourceModel\Region');
    }
}
