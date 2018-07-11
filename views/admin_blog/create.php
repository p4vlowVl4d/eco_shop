<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<style>
	textarea {
    border: 2px solid #ccc;
	}
	textarea::focus{
	box-shadow: none;
	}
</style>
<section>
	<div class="container">
		<div class="row">
			<br/>

             <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/blog">Управление блогом</a></li>
                    <li class="active">Создать запись</li>
                </ol>
            </div>
            <br>
			<h4>Добавить запись</h4>
			<br>
			<?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
			<div class="col-lg-8">
				<?php if($message == false ):?>
				<div class="login-form">
					<form action="#" method="post" enctype="multipart/form-data">
						<p>Название статьи</p>
						<input name="name" type="text">
						<br>
						<p>Автор статьи</p>
						<input name="author" type="text">
						<br>
						<p>Категория</p>
						<input name="category" type="text">
						<br>
						<p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>
                        <br/>
                        <br/>
                        <p>Превью записи</p>
                        <input type="file" name="image" placeholder="" value="">
                        <br/>
                        <br>
                        <p>Статья</p>
                        <textarea  name="content" cols="60" rows="30"></textarea>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
					</form>
				</div>
			<?php elseif($message == 0):?>
				<div class="message">
					<h3>Статья не была сохранена.</h3>
				</div>
			<?php else:?>
				<div class="message">
					<h3>Статья #<?=$message?> была успешно сохранена!</h3>
					<p>Через несколько секунд вы будете перенаправлены на страницу <a href="/admin/blog">"Управление блогом"</a> </p>
				</div>
			<?php endif;?>
				<br>
				<br>
			</div>
		</div>

	</div>




</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>