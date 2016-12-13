## Manage regions in Magento2 addresses
Magento2 provides country and regions and cities as dropdown option in addresses This module provides flexibility of managing this regions for each country.

Very Easy to use

Test and working with Magento CE 2.0+, and Magento EE 2.0+

###Benefits
This module provides flexibility of managing the regions for each country in your Magento Admin.

####1 - Installation Regions Manager
##### Manual Installation
Install Regions Manager for Magento2
 * Download the extension
 * Unzip the file
 * Create a folder {Magento root}/app/code/PHPCuong/Region
 * Copy the content from the unzip folder


#####Using Composer

```
composer require PHPCuong/magento2-regions-manager

```

####2 - Enable Regions Manager
 * php bin/magento module:enable PHPCuong_Region
 * php bin/magento setup:upgrade
 * php bin/magento setup:static-content:deploy

## Preview
![image](https://raw.githubusercontent.com/PHPCuong/magento2-regions-manager/master/regions-manager.png)
