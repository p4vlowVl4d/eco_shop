<?php require_once(ROOT.'/views/layouts/header.php');?>
	<div class="page-cabinet">
		<h2 style="color:black">Кабинет пользователя</h2>
		<h3 style="color:black">Привет,&nbsp;<?=$user['name']?>&nbsp;!</h3>
		<br>
		<ul>
			<li><a href="/cabinet/edit">Редактировать личные данные</a></li>
			<li><a href="/cabinet/history">Список покупок</a></li>
		</ul>
		
		
	</div>
	</div>
<?php require_once(ROOT.'/views/layouts/footer.php');?>