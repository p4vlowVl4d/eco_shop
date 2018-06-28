<?php require(ROOT.'/views/layouts/header.php'); ?>

        <div class="content">
            <div class="title-single-product">
                <p><?= $productById['name'];?></p>
            </div>
            <div class="single-product">
                <div class="single-product-presentation">
                    <div class="single-product-str">
                        <div class="single-product-presentation-img">
                            <img src="<?php Product::getImage($productById['id']);?>" alt="">
                        </div>
                        <div class="single-product-presentation-inf">
                            <div class="presence">
                            <?php if($productById['status'] == 1)
                            {
                             echo  '<p>В наличии</p>';
                            }else
                            {
                                echo '<p>Нет в наличии</p>';
                            }

                            ?>
                                

                            </div>
                            <div class="more-inf">
                                <p>Производитель: <strong><?= $productById['brand'];?></strong> </p>
                                <!-- <p>Артикул:<strong></strong> </p> -->
                                <p>Вес: <strong>200.гр</strong></p>
                                <div class="more-inf-price_block">
                                    <p>Цена за шт:</p>
                                    <p class="price"><strong><?= $productById['price'];?>.p</strong></p>
                                    <div class="prod-bot">
                                        <div class="prod-kol">
                                        <input type="text" class="min-price" value="1">
                                        </div>
                                        <div class="prod-pm">
                                            <p class="plus-col-up">+</p>
                                            <p class="minus-col-down">-</p>
                                        </div>
                                        <div class="prod-but">
                                            <a href="#" class="addToCart" data-id="<?=$productById['id'];?>">В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="single-product-desc">
                        <p>Информация о товаре</p>
                        <p><?= $productById['description'];?></p>
                    </div>
                </div>
                <div class="single-product-more">
                    <p>Здесь будет прочая информация об условиях доставки и т.д</p>
                </div>

            </div>
        </div>
    </div>

<?php require(ROOT.'/views/layouts/footer.php'); ?>
