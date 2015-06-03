<?php
class MobWeb_UpsellCategory_Block_Product_List_Upsell extends Mage_Catalog_Block_Product_List_Upsell
{
    protected $_itemCollection;

    protected function _prepareData()
    {
        // Instantiate the custom model
        $product = Mage::getModel( 'upsellcategory/product' );

        // Pass the product limit set via the layout.xml to the model
        $product->setData( 'product_limit', $this->getData( 'product_limit' ) );

        // The custom model has the a function to retrieve the related products
        // by parent category. Pass "true" as the first argument to only show
        // related products from the current product's category, not its
        // sibling categories as well
        $this->_itemCollection = $product->getUpSellProductCollection();

        // Return
        return $this;
    }
}