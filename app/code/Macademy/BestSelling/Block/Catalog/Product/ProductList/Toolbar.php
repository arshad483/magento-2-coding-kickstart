<?php
namespace Macademy\BestSelling\Block\Catalog\Product\ProductList;

class Toolbar extends \Magento\Catalog\Block\Product\ProductList\Toolbar
{
    /**
     * Load Available Orders
     *
     * @return \Magento\Catalog\Block\Product\ProductList\Toolbar
     */
    public function getAvailableOrders()
    {
        $this->loadAvailableOrders();
        return $this->_availableOrder;
    }

    /**
     * Load Available Orders
     *
     * @return \Magento\Catalog\Block\Product\ProductList\Toolbar
     */
    private function loadAvailableOrders()
    {
        if ($this->_availableOrder === null) {
            $this->_availableOrder = $this->_catalogConfig->getAttributeUsedForSortByArray();
        }
        $this->_availableOrder['bestsellers'] = 'Best Sellers';
        return $this;
    }
}
