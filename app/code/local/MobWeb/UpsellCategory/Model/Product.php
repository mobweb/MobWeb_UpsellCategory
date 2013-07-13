<?php
class MobWeb_UpsellCategory_Model_Product extends Mage_Catalog_Model_Product
{
    public function getUpSellProductCollection($sameCategoryOnly = false)
    {
        // Get a reference to the current product
        $product = Mage::registry('product');

        // Get the product's category
        $category = $product->getCategory();

        // If we also want to display products from sibling categories,
        // get a list of these
        if(!$sameCategoryOnly) {
            // Get the parent category's child categories, the siblings of the
            // current product's category
            $categories = $category->getParentCategory()->getChildrenCategories();
        } else {
            // Otherwise, use an array of just the current category
            $categories = array($category);
        }

        // Loop through the sibling categories and get all their products
        // IDs that can be used to create a global collection later on
        $category_product_ids = array();
        foreach( $categories AS $category ) {
            // Merge all the category's product's ID into the helper array
            $category_product_ids = array_merge($category_product_ids, $category->getProductCollection()->getAllIds());
        }

        // Now create a collection that contains all of the category's
        // products
        //@TODO: Only show products that are not out of stock and are active
        $category_products = Mage::getModel('catalog/product')->getCollection()->addFieldToFilter('entity_id', $category_product_ids);

        // Specify the required attributes
        $category_products->addAttributeToSelect('name');
        $category_products->addAttributeToSelect('price');
        $category_products->addAttributeToSelect('small_image');

        // Set the limit
        $limit = $this->getData('product_limit');
        $category_products->getSelect()->limit($limit);

        // Load the collection
        $category_products->load();

        // Return the collection
        return $category_products;
    }
}