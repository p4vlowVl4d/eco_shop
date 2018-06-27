<?php require_once(ROOT.'/views/layouts/header.php');?>
<div class="page-login">
   <p class="page-login-title">Войти</p>
     <?php if(isset($errors) && is_array($errors)):?>
   	<br>
	<ul class="er_message_register">
		<?php foreach ($errors as $error):?>
		<li style="color:black"> -- <?=$error;?> </li>
		<?php endforeach;?>
	</ul>
   <?php endif;?>
    <form action="#" method="post"  class="user-login">
        <p><input type="email" name="email" class="typical-input" placeholder="Ваш email" value="<?=$email;?>"></p>
        <p><input type="password" name="password" class="typical-input" placeholder="you password" value="<?=$password;?>"></p>
        <p><input type="submit" name="submit" class="typical-submit" placeholder="отправить"></p>
        <p>Забыли пароль? -&nbsp;<a href="#">восстановить</a></p>
    </form>
</div>
</div>
<?php require_once(ROOT.'/views/layouts/footer.php');?>