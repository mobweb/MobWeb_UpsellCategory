# MobWeb_UpsellCategory extension for Magento

This extension replaces the `upsell_products` block on the product detail page with a block that presents products from the current product's category or optionally also the current product's sibling categories.

Let's assume you have the following category setup:

* Root Catalog
	* Clothes
		* Men's Clothes
			* Shirts
			* Shoes
			* Jeans

When viewing a product from the category `Shoes`, the custom block will display random products from the `Shoes` category. Optionally, it can also display products from the `Shirts` and `Jeans` categories.

## Installation

Download & install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/). Or directly via git, using [jreinke/modgit](https://github.com/jreinke/modgit).

## Configuration

To enable displaying of sibling categories' products, set the first argument of the call to `$product->getUpSellProductCollection()` in `Upsell.php` to `true`.

## Notice

Since a product can be assigned to multiple categories, this extension relies on the current environment of the viewed product to determined its related "upsell" products. So for example if you have a product visible at `/shoes/some-shoe.html`, it will display different "upsell" products if it's viewed directly at `/some-shoe.html`.

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).