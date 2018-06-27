<?php

return array(
  'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
  'blog/([0-9]+)'=> 'blog/view/$1',
  
  'cart/delAjax/([0-9]+)'=> 'cart/delAjax/$1',
  'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',

  'category/([0-9]+)/page-([0-9]+)' => 'product/category/$1/$2',

  'product/page-([0-9]+)'=>'product/catalog/$1',
   'category/([0-9]+)' => 'product/category/$1',  // actionCategory в CatalogController
   'cart/checkout'=>'cart/checkout',

   'backend/adminZone'=> 'admin/login',

   'user/logout' => 'user/logout',
   'cabinet/edit' => 'cabinet/edit',
   'cabinet/history'=>'cabinet/history',
   'cabinet'=>'cabinet/index',
   'cart'=>'cart/index',
   'about'=>'about/about',
   'sign_up' => 'user/register',
   'login' => 'user/login',
   'contacts'=>'about/contacts',
    'product' => 'product/catalog', // actionIndex в CatalogController
    'blog'=> 'blog/index',
    '' => 'site/index', // actionIndex в SiteController

);
