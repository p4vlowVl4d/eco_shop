<?php

require_once ROOT.'/models/Blog.php';

class BlogController
{
	public $date;
	public function actionIndex()
  	{
    $newsList = array();
    $newsList = Blog::getNewsList();
    require_once(ROOT.'/views/blog/index.php');

    return true;
  	}
	public function actionView($id)
  	{
    $newsItem = array();
    $newsItem = Blog::getNewsItemById($id);
    require_once(ROOT.'/views/blog/view.php');
    return true;
  	}
}