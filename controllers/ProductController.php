<?php


class ProductController
{
  function construct()
  {
    $categoryList = array();
    $categoryList = Category::getCategoriesList();
    return $categoryList;
  }
  public function actionView($id)
  {
  	$productById = array();
  	$productById  = Product::getProductById($id);
    require_once(ROOT.'/views/product/view.php');
    return true;
  }
  public function actionCatalog($page = 1)
    {
    $productList = array();
    $productList = Product::getProductCatalog();
    $categories = array();
    $categories = self::construct();
    $nameCategory = 'Каталог';
    $total = Product::getTotalProduct();
    $pagination = new Pagination($total , $page, Product::SHOW_BY_DEFAULT, 'page-');
    require_once(ROOT.'/views/catalog/index.php');
    return true;
    }
  public function actionCategory($id, $page = 1)
  {
    $productList = array();
    $productList = Product::getProductsListByCategory($id, $page);
    $categories = array();
    $categories = self::construct();
    $nameCategoryArr = Category::getCategoryNameById($id);
    $nameCategory = $nameCategoryArr['name'];
    $total = Product::getTotalProduct($id);
    $pagination = new Pagination($total , $page, Product::SHOW_BY_DEFAULT, 'page-');
    include_once(ROOT.'/views/catalog/index.php');
    return true;
  }
}
