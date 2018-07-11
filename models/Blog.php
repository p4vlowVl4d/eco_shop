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

    $sql = 'DELETE FROM news WHERE id = :id';

    $result = $db->prepare($sql);
    $result->bindParam(':id',$id, PDO::PARAM_INT);
    return $result->execute();
  }
  public static function createNews($options)
  {
    $db = Db::getConnection();
    $options['content'] = self::editContent($options['content']);
    $sql = 'INSERT INTO news (title, date_news, author, category, short_content, content, status) VALUES (:title, :date_news, :author, :category, :short_content,  :content, :status)';
    $result = $db->prepare($sql);
    $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
    $result->bindParam(':date_news', $options['date_news'], PDO::PARAM_STR);
    $result->bindParam(':author', $options['author'], PDO::PARAM_STR);
    $result->bindParam(':category', $options['category'], PDO::PARAM_STR);
    $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
    $result->bindParam(':content', $options['content'], PDO::PARAM_STR);
    $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
    if($result->execute()){
       return $db->lastInsertId();
    }
    return 0;
  }
  public static function editContent($content)
  {
    if(!empty($content)){
      $content = substr_replace($content, '<pre style="color:grey">', 0, 1);
      $content = substr_replace($content, '</pre>', -1, 1);
      $content = htmlspecialchars_decode($content);
      return $content;
    }
    return false;
    
  }
  public static function getImages($id)
  {
      $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/upload/images/blog/';

      
        $attrJpg = '.jpg';
        $attrPng = '.png';

        $pathToBlogPng = $path . $id . $attrPng;
        $pathToBlogImageJpg = $path . $id . $attrJpg;

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToBlogImageJpg)) {
            
            return $pathToBlogImageJpg;
        }else if(file_exists($_SERVER['DOCUMENT_ROOT'].$pathToBlogPng)){
            return $pathToBlogPng;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
  }
  public static function updateProductById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        $options['short_content'] = self::editContent($options['content']);
        $sql = "UPDATE product
            SET 
                title = :title, 
                category = :category, 
                content = :content, 
                short_content = :short_content,
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':category', $options['category'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }
}
