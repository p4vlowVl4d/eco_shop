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
			$id = intval($id);
			Blog::deleteNewsById($id);

			header('Location: /admin/blog');
		}
		require_once(ROOT . '/views/admin_blog/delete.php');
        return true;
	}
	public function actionCreate()
	{	
		self::checkAdmin();

		$errros = false;
		$message = false;
		if(isset($_POST['submit'])){
			

			$options['title'] = $_POST['name'];
			$options['category'] = $_POST['category'];
			$options['author'] = $_POST['author'];
			$options['content'] = $_POST['content'];
			$options['status'] = $_POST['status'];
			$options['short_content'] = substr($_POST['content'], 0 ,20);
			$options['date_news'] = date("y.m.d");
			

			if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поля';
            	}
			if($errros == false){

				$message = Blog::createNews($options);
				if($message){
					if(is_uploaded_file($_FILES['image']['tmp_name'])){
						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/blog/{$message}.jpg");
					}
				}
				header('Location: /admin/blog');
			}
		}
		require_once(ROOT.'/views/admin_blog/create.php');
		return true;
	}
	public function actionUpdate($id)
	{	
		self::checkAdmin();
		$message = false;
		$news = array();
		$news = Blog::getNewsItemById($id);
		if(isset($_POST['submit'])){
			$options['title'] = $_POST['title'];
			$options['category'] = $_POST['category'];
			$options['content'] = $_POST['content'];
			$options['status'] = $_POST['status'];

			if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поля';
            	}
            	if($errros == false){

				$message = Blog::createNews($options);
				if($message){
					if(is_uploaded_file($_FILES['image']['tmp_name'])){
						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/blog/{$message}.jpg");
					}
				}
				header('Location: /admin/blog');
			}
		}

		require_once(ROOT.'/views/admin_blog/update.php');
		return true;
	}
	public static function actionView($id)
	{
		$news = array();
		$news = Blog::getNewsItemById($id);
		require_once(ROOT.'/views/admin_blog/view.php');
		return true;
	}
}