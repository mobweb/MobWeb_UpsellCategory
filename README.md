# MobWeb_UpsellCategory extension for Magento

This extension replaces the `upsell_products` block on the product detail page with a block that presents products from a sibling category.

Let's assume you have the following category setup:

* Root Catalog
	* Clothes
		* Men's Clothes
			* Shirts
			* Shoes
			* Jeans

When viewing a product from the category `Shoes`, the custom block will display random products from the `Shirts` and `Jeans` categories.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).