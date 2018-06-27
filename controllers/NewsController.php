<?php



class BlogController
{

  public function actionIndex()
  {
    $newsList = array();
    $newsList = Blog::getNewsList();
    $title = 'news';
    require_once(ROOT.'/views/blog/index.php');

    return true;
  }
  public function actionView($category, $id)
  {
    $newsItem = array();
    $newsItem = Blog::getNewsItemById($id);
    require_once(ROOT.'/views/blog/view.php');
    return true;
  }
}
