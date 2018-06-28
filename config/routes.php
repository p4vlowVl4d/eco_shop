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

   // Управление товарами:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // Управление категориями:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление заказами:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    //Управление записями
    'admin/blog/delete/([0-9]+)'=>'adminBlog/delete/$1',
    'admin/blog/update/([0-9]+)'=> 'adminBlog/update/$1',
    'admin/blog/create' => 'adminBlog/create',
     'admin/blog' => 'adminBlog/index',

    // Админпанель:
    'admin' => 'admin/index',
    'admin/login'=> 'admin/login',

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
