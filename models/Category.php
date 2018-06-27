<?php

/**
* 
*/
class Category
{
	
	public static function getCategoriesList()
	{
		$db = Db::getConnection();
		$result= $db->query('SELECT id, name, sort_order, icon_name FROM category ORDER BY sort_order ASC');
		$i = 0;
		while($row = $result->fetch()){
			$categoryList[$i]['id']=$row['id'];
			$categoryList[$i]['name']=$row['name'];
			$categoryList[$i]['sort_order']=$row['sort_order'];
			$categoryList[$i]['icon_name']=$row['icon_name'];
			$i++;
		}

		return $categoryList;
	}
	public static function getCategoryNameById($id)
	{

		$db = Db::getConnection();
		$id = intval($id);
		if($id){
			$result = $db->query('SELECT name FROM category WHERE id='.$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			return $result->fetch();
		}
		
	}
}
