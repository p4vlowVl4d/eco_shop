<?php require_once(ROOT.'/views/layouts/header.php');?>

<div class="container_sidebar">
            <div class="sideBar">
                <div class="rightMenu-categories">


                    <div class="titleMenu">
                        <p>Категории</p>
                    </div>
                    <ul>
                        <?php foreach($categories as $key):?>
                        <li><a href="/category/<?= $key['id']?>"<?php if($key['name'] == $nameCategory) print 'class="active_cat"';?>><?=$key['name']?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="products">
                <div class="titleProduct">
                    <p><?=$nameCategory?></p>
                </div>
                  <div class="products-str">
                      
                  <?php foreach ($productList as $product):?>
                    
                   <div class="products-str-product"><a href="/product/<?= $product['id']?>">
                       <img src="<?= Product::getImage($product['id']) ?>" alt="" class="img-prod" width="200">
                   </a>
                    <div class="products-str-product-text">
                        <p class="products-str-product-text_name"><?= $product['name']?></p>
                        <p class="products-str-product-text_price"><?= $product['price']?>.р</p>
                        <p class="products-str-product-text_desc"><a href="#"><?= $product['brand']?></a>, 200.гр</p>
                    </div>
                    <div class="products-str-product-buttons">
                        <div class="products-str-product-buttons_num">
                            <p class = "count-prod" data-count="1">1</p>
                            <div>
                                <p class="plus">+</p>
                                <p class="minus">&mdash;</p>
                            </div>
                        </div>
                        <a href="#" class="cart" data-id="<?=$product['id']?>">купить</a>
                        <input type="button" class="like" value="&#10084;">
                    </div>
                </div>
                <?php endforeach;?>
                 </div> 
                 <?=$pagination->get();?>
                
            </div>
            
        </div>
    </div>




<?php require_once(ROOT.'/views/layouts/footer.php');?>