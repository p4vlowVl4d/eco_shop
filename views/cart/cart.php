<?php require_once(ROOT.'/views/layouts/header.php');?>
  <div class="cart-content">
            <div class="table-cart">
                <h2>Корзина</h2>
                <?php if($productsInCart):?>
                <table>
                    <thead>
                        <tr>
                            <td>Наименование</td>
                            <td>Кол-во</td>
                            <td>Цена</td>
                            <td>Стоимость</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product):?>
                        <tr data-id="<?=$product['id']?>">
                            <td>
                                <p style="color: aqua"><?=$product['name']?></p>
                                <img src="/template/img/product/<?=$product['image']?>" alt="" width="140">
                            </td>
                            <td><div class="quantity">
                                <span><p id="plus">+</p><p class="num"><?=$productsInCart[$product['id']]?></p><p id="minus">-</p></span></div></td>
                            <td><?=$product['price']?>.р</td>
                            <td>
                            <?php $c = $product['price'];
                                  $b = $productsInCart[$product['id']];
                                  $c = intval($c);
                                  $b = intval($b);
                                  $c = $c*$b;
                                  echo $c;
                            ?>.р
                            <span class="delInCart-container"><a href="#" class="delInCart" data-id="<?= $product['id']?>" style="color:red">&#10008;</a></span>
                        </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    <tfoot id="sub_block">
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Итого:</td>
                            <td><?=$totalPrice?>.p</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="register-order">
                    <a href="/cart/checkout/">Оформить заказ</a>
                </div>
            <?php else:?>
                <div class="message-notify">
                    <p>Ваша корзина пуста!</p>
                </div>
            <?php endif;?>
           
            </div>
            
        </div>
       </div>
<?php require_once(ROOT.'/views/layouts/footer.php');?>