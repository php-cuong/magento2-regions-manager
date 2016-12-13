<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-13 18:24:39
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-13 18:26:26
 */

namespace PHPCuong\Region\Model\ResourceModel;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\AbstractModel;

class RegionName extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * construct
     * @return void
     */
    protected function _construct()
    {
        $this->_init('directory_country_region_name', 'region_id');
    }
}
