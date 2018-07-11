<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section>
	<style>
		.success{
			height: 40px;
			background:#d9edf7;
			border-radius: 5px;
			padding: 12px 10px;
		}
		.danger{
			height: 40px;
			background:#f2dede;
			border-radius: 5px;
			padding: 12px 10px;
		}
	</style>
	<div class="container">
		<div class="row">
			<br>
			<div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Дополнительные настройки</li>
                </ol>
            </div>

            <div class="col-lg-4">
            	<?php if($message == true):?>
            		<br>
            		<div class="success">
            			<p class="text-success" style="background:#d9edf7">Изменения успешно сохранены</p>
            		</div>
            		<br>
            	<?php else:?>
            		<br>
            		<div class="danger">
            			<p class="text-danger"><?=$message?></p>	
            		</div>
            		<br>
            	<?php endif;?>
            	
            	<div class="login-form">
            		<form action="#" method="post" enctype="multipath/form-data">
            			<p>Статус магазина</p>
                        <select name="status-<?php echo $status['id'];?>">
                        <?php if($status['value'] == 'on'):?>
                            <option value="on" selected="selected">включен</option>
                            <option value="off">отключен</option>
                        <?php else:?>
							<option value="on">включен</option>
                            <option value="off" selected="selected">отключен</option>
                        <?php endif;?>
                        </select>
                        <br><br>
                       	<p>Контактные данные</p>
                       	<br><br>
                       	<p>Контактный номер</p>
                        <input type="text" name="tel-<?=$tel['id']?>" placeholder="" value="<?=$tel['value']?>">
                        <p>Email</p>
                        <input type="text" name="email-<?=$email['id']?>" placeholder="" value="<?=$email['value']?>">
						<p>Адрес</p>
						<input type="text" name="address-<?=$address['id']?>" placeholder="" value="<?=$address['value']?>">
						<br>
						 <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
						<br>
            		</form>
            	</div>
            </div>
		</div>
	</div>
</section>



<?php include ROOT . '/views/layouts/footer_admin.php'; ?>