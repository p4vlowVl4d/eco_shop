<?php

/**
* 
*/
class AdminConfigController extends AdminBase
{
	
	public function actionIndex()
	{
		self::checkAdmin();
		$a = false;
		$config = array();
		$config = Article::getSiteConfig();
		$message = '';
		foreach ($config as  $value) {
			switch ($value['name']) {
				case 'tel':
					$tel['id'] = $value['id'];
					$tel['value'] = $value['value'];
					break;
				case 'email':
					$email['id'] = $value['id'];
					$email['value'] = $value['value'];
					break;
				case 'status':
					$status['id'] = $value['id'];
					$status['value'] = $value['value'];
					break;
				case 'address':
					$address['id'] = $value['id'];
					$address['value'] = $value['value'];
					break;
				default:
					continue;
					break;
			}
		}
		$errors = false;
		if(isset($_POST['submit'])){
			if(User::checkEmail($_POST['email-'.$email['id']])){
				$email['value'] = $_POST['email-'.$email['id']];
			}else{
				$errors[] = 'некорректный email';
			}
			if($errors == false){
				$tel['value'] = $_POST['tel-'.$tel['id']];
				$address['value'] = $_POST['address-'.$address['id']];
				$status['value'] = $_POST['status-'.$status['id']];
				$options[$tel['id']] = $tel['value'];
				$options[$email['id']] = $email['value'];
				$options[$address['id']] = $address['value'];
				$options[$status['id']] = $status['value'];
				$result = Article::setSiteConfig($options);
				if($result == true){
					$message = true;
				}else{
					$message = $result;
				}
				$a = true;
			}
			
		}
		require_once(ROOT.'/views/admin_config/index.php');
		return true;
	}
}