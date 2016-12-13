<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-12 03:46:38
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-13 18:02:07
 */

namespace PHPCuong\Region\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Install Data
 */
class InstallData implements InstallDataInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $vietnam_regions = [
            ['country_id' => 'VN', 'code' => 'TPHANOI', 'default_name' => 'Thành phố Hà Nội'],
            ['country_id' => 'VN', 'code' => 'HAGIANG', 'default_name' => 'Hà Giang'],
            ['country_id' => 'VN', 'code' => 'CAOBANG', 'default_name' => 'Cao Bằng'],
            ['country_id' => 'VN', 'code' => 'BACKAN', 'default_name' => 'Bắc Kạn'],
            ['country_id' => 'VN', 'code' => 'TUYENQUANG', 'default_name' => 'Tuyên Quang'],
            ['country_id' => 'VN', 'code' => 'LAOCAI', 'default_name' => 'Lào Cai'],
            ['country_id' => 'VN', 'code' => 'DIENBIEN', 'default_name' => 'Điện Biên'],
            ['country_id' => 'VN', 'code' => 'LAICHAU', 'default_name' => 'Lai Châu'],
            ['country_id' => 'VN', 'code' => 'SONLA', 'default_name' => 'Sơn La'],
            ['country_id' => 'VN', 'code' => 'YENBAI', 'default_name' => 'Yên Bái'],
            ['country_id' => 'VN', 'code' => 'HOABINH', 'default_name' => 'Hoà Bình'],
            ['country_id' => 'VN', 'code' => 'THAINGUYEN', 'default_name' => 'Thái Nguyên'],
            ['country_id' => 'VN', 'code' => 'LANGSON', 'default_name' => 'Lạng Sơn'],
            ['country_id' => 'VN', 'code' => 'QUANGNINH', 'default_name' => 'Quảng Ninh'],
            ['country_id' => 'VN', 'code' => 'BACGIANG', 'default_name' => 'Bắc Giang'],
            ['country_id' => 'VN', 'code' => 'PHUTHO', 'default_name' => 'Phú Thọ'],
            ['country_id' => 'VN', 'code' => 'VINHPHUC', 'default_name' => 'Vĩnh Phúc'],
            ['country_id' => 'VN', 'code' => 'BACNINH', 'default_name' => 'Bắc Ninh'],
            ['country_id' => 'VN', 'code' => 'HAIDUONG', 'default_name' => 'Hải Dương'],
            ['country_id' => 'VN', 'code' => 'TPHAIPHONG', 'default_name' => 'Thành phố Hải Phòng'],
            ['country_id' => 'VN', 'code' => 'HUNGYEN', 'default_name' => 'Hưng Yên'],
            ['country_id' => 'VN', 'code' => 'THAIBINH', 'default_name' => 'Thái Bình'],
            ['country_id' => 'VN', 'code' => 'HANAM', 'default_name' => 'Hà Nam'],
            ['country_id' => 'VN', 'code' => 'NAMDINH', 'default_name' => 'Nam Định'],
            ['country_id' => 'VN', 'code' => 'NINHBINH', 'default_name' => 'Ninh Bình'],
            ['country_id' => 'VN', 'code' => 'THANHHOA', 'default_name' => 'Thanh Hóa'],
            ['country_id' => 'VN', 'code' => 'NGHEAN', 'default_name' => 'Nghệ An'],
            ['country_id' => 'VN', 'code' => 'HATINH', 'default_name' => 'Hà Tĩnh'],
            ['country_id' => 'VN', 'code' => 'QUANGBINH', 'default_name' => 'Quảng Bình'],
            ['country_id' => 'VN', 'code' => 'QUANGTRI', 'default_name' => 'Quảng Trị'],
            ['country_id' => 'VN', 'code' => 'THUATHIENHUE', 'default_name' => 'Thừa Thiên Huế'],
            ['country_id' => 'VN', 'code' => 'DANANG', 'default_name' => 'Thành phố Đà Nẵng'],
            ['country_id' => 'VN', 'code' => 'QUANGNAM', 'default_name' => 'Quảng Nam'],
            ['country_id' => 'VN', 'code' => 'QUANGNGAI', 'default_name' => 'Quảng Ngãi'],
            ['country_id' => 'VN', 'code' => 'BINHDINH', 'default_name' => 'Bình Định'],
            ['country_id' => 'VN', 'code' => 'PHUYEN', 'default_name' => 'Phú Yên'],
            ['country_id' => 'VN', 'code' => 'KHANHHOA', 'default_name' => 'Khánh Hòa'],
            ['country_id' => 'VN', 'code' => 'NINHTHUAN', 'default_name' => 'Ninh Thuận'],
            ['country_id' => 'VN', 'code' => 'BINHTHUAN', 'default_name' => 'Bình Thuận'],
            ['country_id' => 'VN', 'code' => 'KONTUM', 'default_name' => 'Kon Tum'],
            ['country_id' => 'VN', 'code' => 'GIALAI', 'default_name' => 'Gia Lai'],
            ['country_id' => 'VN', 'code' => 'DAKLAK', 'default_name' => 'Đắk Lắk'],
            ['country_id' => 'VN', 'code' => 'DAKNONG', 'default_name' => 'Đắk Nông'],
            ['country_id' => 'VN', 'code' => 'LAMDONG', 'default_name' => 'Lâm Đồng'],
            ['country_id' => 'VN', 'code' => 'BINHPHUOC', 'default_name' => 'Bình Phước'],
            ['country_id' => 'VN', 'code' => 'TAYNINH', 'default_name' => 'Tây Ninh'],
            ['country_id' => 'VN', 'code' => 'BINHDUONG', 'default_name' => 'Bình Dương'],
            ['country_id' => 'VN', 'code' => 'DONGNAI', 'default_name' => 'Đồng Nai'],
            ['country_id' => 'VN', 'code' => 'BARIAVUNGTAU', 'default_name' => 'Bà Rịa - Vũng Tàu'],
            ['country_id' => 'VN', 'code' => 'TPHOCHIMINH', 'default_name' => 'Thành phố Hồ Chí Minh'],
            ['country_id' => 'VN', 'code' => 'LONGAN', 'default_name' => 'Long An'],
            ['country_id' => 'VN', 'code' => 'TIENGIANG', 'default_name' => 'Tiền Giang'],
            ['country_id' => 'VN', 'code' => 'BENTRE', 'default_name' => 'Bến Tre'],
            ['country_id' => 'VN', 'code' => 'TRAVINH', 'default_name' => 'Trà Vinh'],
            ['country_id' => 'VN', 'code' => 'VINHLONG', 'default_name' => 'Vĩnh Long'],
            ['country_id' => 'VN', 'code' => 'DONGTHAP', 'default_name' => 'Đồng Tháp'],
            ['country_id' => 'VN', 'code' => 'ANGIANG', 'default_name' => 'An Giang'],
            ['country_id' => 'VN', 'code' => 'KIENGIANG', 'default_name' => 'Kiên Giang'],
            ['country_id' => 'VN', 'code' => 'TPCANTHO', 'default_name' => 'Thành phố Cần Thơ'],
            ['country_id' => 'VN', 'code' => 'HAUGIANG', 'default_name' => 'Hậu Giang'],
            ['country_id' => 'VN', 'code' => 'SOCTRANG', 'default_name' => 'Sóc Trăng'],
            ['country_id' => 'VN', 'code' => 'BACLIEU', 'default_name' => 'Bạc Liêu'],
            ['country_id' => 'VN', 'code' => 'CAMAU', 'default_name' => 'Cà Mau'],
        ];
        // insert the regions for Vietnam
        foreach ($vietnam_regions as $key => $value) {
            $select = $setup->getConnection()->select()
            ->from(['dcr' => $setup->getTable('directory_country_region')])
            ->where('dcr.country_id = ?', $value['country_id'])
            ->where('dcr.code = ?', $value['code'])
            ->where('dcr.default_name = ?', $value['default_name']);
            if (!$setup->getConnection()->fetchRow($select)) {
                $setup->getConnection()->insertForce(
                    $setup->getTable('directory_country_region'),
                    $value
                );
            }
        }
    }
}
