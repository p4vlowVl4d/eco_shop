<?php require_once(ROOT.'/views/layouts/header.php');?>
<div class="page-register">
   <p class="page-register-title">Регистрация</p>
   <?php if($result):?>
   	<br>
   	<p style="color:black"> Вы зарегистрированы! </p>
   <?php endif;?>
   <?php if(isset($errors) && is_array($errors)):?>
   	<br>
	<ul class="er_message_register">
		<?php foreach ($errors as $error):?>
		<li style="color:black"> -- <?=$error;?> </li>
		<?php endforeach;?>
	</ul>
   <?php endif;?>
    <form action="#" method="post" class="user-register">
        <p><input type="text" name="name" class="typical-input" placeholder="Имя" value="<?=$name;?>"></p>
        <p><input type="email" name="email" class="typical-input" placeholder="example@gmail.com" value="<?=$email;?>"></p>
        <p><input type="password" name="password" class="typical-input" placeholder="you password" value="<?=$password;?>"></p>
        <p><input type="submit" name="submit" class="typical-submit" placeholder="отправить"></p>
        <p>Если у вас уже есть учетная запись -&nbsp;<a href="/login/">войти</a></p>
    </form>
</div>
</div>
<?php require_once(ROOT.'/views/layouts/footer.php');?>
