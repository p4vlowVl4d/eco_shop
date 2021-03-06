<?php
/**
* 
*/
class UserController
{
	
	public function actionRegister()
	{
		$name = '';
		$email = '';
		$password = '';
		$result = false;

		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;


			if(!User::checkName($name)){
				$errors[] = 'Имя не должно быть короче 2-х символов!';
			}
			if(!User::checkEmail($email)){
				$errors[] = 'Некорректный email адрес';
			}
			if(!User::checkPass($password)){
				$errors[] = 'Пароль должен содержать хотя бы 6 символов';
			}
			if(User::checkEmailExists($email)){
				$errors[] = 'Такой email уже используется!';
			}	
			if($errors == false){
				$result = User::register($name, $email, $password);
			}
		}
		require_once(ROOT.'/views/user/register.php');
		return true;
	}
	public function actionLogin()
	{
		$email = '';
		$password = '';
		$result = false;

		if(isset($_POST['submit'])){

			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;


			if(!User::checkEmail($email)){
				$errors[] = 'Некорректный email адрес';
			}
			if(!User::checkPass($password)){
				$errors[] = 'Пароль должен содержать хотя бы 6 символов';
			}
				
			$userId = User::checkUserData($email, $password);

			if($userId == false){
				$errors[] = 'Неправильные данные для входа';
			}else{
				

				$userRole = User::checkUserRole($userId);

				if($userRole){

					header('Location: /admin/');

				}else{

					header("Location: /cabinet/");

				}
				User::auth($userId);
			}
		}
		require_once(ROOT.'/views/user/login.php');
		return true;
	}
	public function actionLogout()
	{

		
		unset($_SESSION['user']);
		header('Location: /');
		

	}
}