<?php
/**
 *
 */
class Product
{
 const SHOW_BY_DEFAULT = 9;
 public static function getProductCatalog(){
    $db = Db::getConnection();
    $productsList = array();
    $count = self::SHOW_BY_DEFAULT;
    $result = $db->query("SELECT id, name, price, image, is_new, brand FROM product WHERE status = '1' ORDER BY id ASC LIMIT $count");
    $i = 0;
    while($row = $result->fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['brand'] = $row['brand'];
            $i++;
    }
    return $productsList;
 }
public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query("SELECT id, name, price, image, is_new, brand FROM product WHERE status = '1' ORDER BY id DESC LIMIT  $count");

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['brand'] = $row['brand'];
            $i++;
        }

        return $productsList;
    }
 public static function getProductById($id)
    {
        $db = Db::getConnection();
        $id = intval($id);
       if ($id) {


            $result = $db->query('SELECT * FROM product WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
     public static function getProductsListByCategory($categoryId = false, $page = 1)
    {

        $db = Db::getConnection();
        $products = array();
        $page = intval($page);
        $offset = 0;
        $offset = ($page-1)*self::SHOW_BY_DEFAULT;
        $count = self::SHOW_BY_DEFAULT;
          if ($categoryId) {


             $result = $db->query("SELECT id, name, price, image, is_new, brand FROM product "
                    . "WHERE status = '1' AND category_id = '$categoryId' "
                    . "ORDER BY id ASC "
                    . "LIMIT $count  OFFSET $offset");

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['is_new'] = $row['is_new'];
                $products[$i]['brand'] = $row['brand'];
                $i++;
            }

            return $products;
        }
    }
    public static function getTotalProduct($categoryId = false)
    {
        $db = Db::getConnection();
        if($categoryId){

            $result = $db->query("SELECT count(id) AS count FROM product WHERE status='1' AND category_id='$categoryId'");
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            return $row['count'];
        }else{
            $result = $db->query("SELECT count(id) AS count FROM product WHERE status='1'");
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            return $row['count'];
        }
        
    }

    public static function getProductsForCart($productsIds)
    {
        $products = array();

        $db = Db::getConnection();

        $idsString = implode(',', $productsIds);

        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i=0;
        while($row = $result->fetch()){
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['image'] = $row['image'];
            $i++;
        }
        return $products;
    }
}
