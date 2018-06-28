<?php
/**
* 
*/
class AdminBlogController extends AdminBase
{
	
	public function actionIndex()
	{
		self::checkAdmin();

		$newsList = array();

		$newsList = Blog::getNewsList();
		require_once(ROOT.'/views/admin_blog/index.php');
		return true;
	}
	public function actionDelete($id)
	{
		self::checkAdmin();
		if(isset($_POST['submit'])){

			Blog::deleteNewsById($id);

			header('Location: /admin/blog');
		}
		require_once(ROOT . '/views/admin_blog/delete.php');
        return true;
	}
	public function actionCreate()
	{	
		require_once(ROOT.'/views/404.php');
		return true;
	}
	public function actionUpdate($id)
	{	
		require_once(ROOT.'/views/404.php');
		return true;
	}
}