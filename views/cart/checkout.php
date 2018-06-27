<?php require(ROOT.'/views/layouts/header.php'); ?>
<div class="page-checkout">
	<h3>Оформление заказа</h3>
	<?php if($result):?>
	<p style="color:black">Ваш заказ оформлен. Мы вам перезвоним на указанный номер</p>
	<?php else:?>
	<p style="color:black">Выбрано товаров: <?=$totalQuantity;?> на сумму <?=$totalPrice;?>.р</p>
	<?php if(isset($errors) && is_array($errors)):?>
   	<br>
	<ul class="er_message_register">
		<?php foreach ($errors as $error):?>
		<li style="color:red"> -- <?=$error;?> </li>
		<?php endforeach;?>
	</ul>
   <?php endif;?>
	<form action="#" method="post" class="form-checkout">
		<p>имя:</p>
		<p><input type="text" name="userName" class="typical-input" value="<?=$userName?>"></p>
		<p>номер телефона:</p>
		<p><input type="phone" name="userPhone" class="typical-input" value="<?=$userPhone?>"></p>
		<p>комментарий к заказу:</p>
		<p><textarea name="userComment"  cols="30" rows="10" class="typical-textarea" value="<?=$userComment?>"></textarea></p>
		<p><input name="submit" class="typical-submit" type="submit" value="отправить"></p>
	</form>
  	<?php endif;?>
</div>
</div>
<?php require(ROOT.'/views/layouts/footer.php'); ?>