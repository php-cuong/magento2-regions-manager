<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-13 18:23:48
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-13 18:25:24
 */

namespace PHPCuong\Region\Model;

class RegionName extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Cache tag
     *
     * @var string
     */
    const CACHE_TAG = 'directory_country_region_name';
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('PHPCuong\Region\Model\ResourceModel\RegionName');
    }
}
