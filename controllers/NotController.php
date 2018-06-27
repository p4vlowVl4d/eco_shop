<?php
/**
* 
*/
class NotController
{
	
	public function actionIndex()
	{
		require_once ROOT.'/views/404.php';
		return true;
	}
}