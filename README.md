# Magento 1.9.3.6 Bugfixes

This repo contains a variety of bug fixes for Magento Open Source version 1.9.3.6.
At this moment, only version 1.9.3.6 is maintained. Some of these fixes might not work on different versions.

To prevent confilicts with rewrites on existing projects, updated core files are moved into app/code/community/Mage and changed.

Fixed bugs

* Datetime Attribute resets to 1970 on Product save
* New 301 redirects are created every time url rewrites are reindexed.
* Url rewrites are created for non visible categories and products.
* Catalog rules disappears every night.
* Apply catalog rules consumes a lot of memory.
* Wrong count returned from anchor categories with loadProductCount on categories.
* HHVM: Error in Zend\_XmlRpc\_Value, Error creating xmlrpc value
* HHVM: Error Invalid chunk size "" unable to read chunked body
* HHVM: Media uploader on edit product in admin is gone.
* Negative product position does not work on anchor categories.
* Subselect condition in Shopping Cart Price Rules causes "Fatal error: Stack overflow".
* PHP7 incompatibilities, most due to [this change](http://php.net/manual/en/migration70.incompatible.php#migration70.incompatible.variable-handling.indirect).
* HHVM: Infinite recursion error when adding bundle product to cart.
* Unique index added to eav\_attribute\_option\_value table

Check the [Closed Issues](https://github.com/webbhuset/bugfix/issues?q=is%3Aissue+is%3Aclosed) page for more info.
