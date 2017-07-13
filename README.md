# Magento 1.9.3.4 Bugfixes

This repo contains a variety of bug fixes for Magento Community version 1.9.3.4.
At this moment, only version 1.9.3.4 is maintained. Some of these fixes might not work on different versions.

To prevent confilicts with rewrites on existing projects, updated core files are moved into app/code/community/Mage and changed.

Fixed bugs

* Datetime Attribute resets to 1970 on Product save
* New 301 redirects are created every time url rewrites are reindexed.
* Url rewrites are created for non visible categories and products.
* Catalog rules disappears every night.
* Apply catalog rules consumes a lot of memory.
* Notice: Undefined variable $freePackageValue in table rate shipping method.
* Wrong count returned from anchor categories with loadProductCount on categories.
* HHVM: Error in Zend_XmlRpc_Value, Error creating xmlrpc value
* HHVM: Error Invalid chunk size "" unable to read chunked body
* HHVM: Media uploader on edit product in admin is gone.
* Negative product position does not work on anchor categories.
* Subselect condition in Shopping Cart Price Rules causes "Fatal error: Stack overflow".

Check the [Closed Issues](https://github.com/webbhuset/bugfix/issues?q=is%3Aissue+is%3Aclosed) page for more info.
