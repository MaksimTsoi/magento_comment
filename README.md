# Tsoi Comment

Magento extension for 1.9 version.
This extension is an overview of what magento can do.

## What was implemented

helper, block, layout, template, controllers (frontend and admin), model, custom model source, collection, observer, sql setup install by version (0.1.0) - migration,  settings in admin configuration: acl and custom tab, translations (locale)

## How to check

table `tsoi_comment_new` should be created 

try uri:

`/tsoi_comment` (before go here add some rows to table `tsoi_comment_new`)
`/tsoi_comment/index` is the same controller action
`/tsoi_comment/index/index`  is a same controller action

`/tsoi_comment/messages/goodbye`

`/tsoi_comment/index/params?first=1&second=val`

`/index.php/admin/comment_test/mytest`

try to add some product to cart. Then you will see `var_dump` of the product.

go to admin -> system -> configuration. Then you will see custom tab `Tsoi comment`.

go to admin -> system -> permissions -> roles. Choose role `administrator`, then click `Role Resources` -> `Resource Access` - custom. Then you will find `Tsoi comment`.



