<?php require_once(ROOT.'/views/layouts/header.php');?>
<div class="page-edit">
   <p class="page-edit-title">Редактировать личные данные</p>
   <?php if($result):?>
   		<h3 style="color: black">Данные отредактированы! </h3>
   <?php else:?>
   
     <?php if(isset($errors) && is_array($errors)):?>
   	<br>
	<ul class="er_message_register">
		<?php foreach ($errors as $error):?>
		<li style="color:black"> -- <?=$error;?> </li>
		<?php endforeach;?>
	</ul>
   <?php endif;?>
   <?php endif;?>
    <form action="#" method="post"  class="user-login">
         <p><input type="text" name="name" class="typical-input" placeholder="Имя" value="<?=$name;?>"></p>
        <p><input type="password" name="password" class="typical-input" placeholder="you password" value="<?=$password;?>"></p>
        <p><input type="submit" name="submit" class="typical-submit" placeholder="сохранить"></p>
        
    </form>
</div>
</div>

<?php require_once(ROOT.'/views/layouts/footer.php');?>