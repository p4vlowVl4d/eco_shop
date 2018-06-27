<?php

class AdminController
{
	
	public function actionLogin()
	{
		include_once(ROOT.'/backend/views/login/index.php');
		return true;
	}
	public function actionIndex()
	{
		return true;
	}
}