<?php

require_once ROOT.'/models/About.php';

 class AboutController
 {
 	
 	public function actionAbout()
 	{
 		
 		
 		require_once(ROOT.'/views/about/about.php');
 		return true;
 	}
 	public function actionContacts()
 	{
 		$userEmail = '';
 		$userText = '';

 		$result = false;

 		if(isset($_POST['submit'])){
 			$userEmail = $_POST['userEmail'];
 			$userText = $_POST['userText'];

 			if(User::checkEmail($userEmail)){
 				$errors[] = 'Неправильный email';
 			}
 			if($errors == false){
 				$adminEmail = 'example@mail.com';
 				$message = "Текст: {$userText}. От: {$userEmail}";
 				$subject = 'Текст письма';
 				$result = email($adminEmail, $subject, $message);
 				$result = true;
 			}
 		}
 		require_once(ROOT.'/views/about/contacts.php');
 		return true;
 	}

 }
