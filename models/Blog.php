<?php



class Blog
{



  public static function getNewsItemById($id)
  {
    $id = intval($id);

    if(!empty($id)){
      
      $db = Db::getConnection();

      $result = $db->query('SELECT * from news WHERE id=' . $id);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $newsItem = $result->fetch();
       return $newsItem;
    }
  }
  public static function getNewsList()
  {

    $db = Db::getConnection();
    $newsList = array();

    $result = $db->query('SELECT id, title, date_news, author, category, short_content, image FROM news WHERE status = "1" ORDER BY id DESC LIMIT 5');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date_news'] = $row['date_news'];
			$newsList[$i]['author'] = $row['author'];
      $newsList[$i]['category'] = $row['category'];
      $newsList[$i]['image'] = $row['image'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}

		return $newsList;
  }
  public static function deleteNewsById($id)
  {
    $db = Db::getConnection();

    $sql = 'DELETE FROM news WHERE id = ":id"';

    $result = $db->prepare($sql);
    $result->bindParam(':id',$id, PDO::PARAM_INT);
    return $result->execute();
  }
}
