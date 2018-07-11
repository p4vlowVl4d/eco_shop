<?php
/**
* 
*/
class Article
{
	
	public static function getSiteConfig()
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM configure WHERE status="1" ORDER BY id');

		$configList = array();
		
		$i = 0;
		while($row = $result->fetch()){
			$configList[$i]['id'] = $row['id'];
			$configList[$i]['name'] = $row['name'];
			$configList[$i]['value'] = $row['value'];
			$configList[$i]['sec_value'] = $row['sec_value'];
			$i++;
		}
		return $configList;
	}
	public static function setSiteConfig($options)
	{
		$errors = false;
		$sql = "UPDATE configure SET value=:value WHERE id=:id";
		$db = Db::getConnection();
		$result = $db->prepare($sql);
		for($i = 1; count($options) >= $i; $i++){
			$result->bindParam(':id', $i, PDO::PARAM_INT);
			$result->bindParam(':value', $options[$i], PDO::PARAM_STR);
			if(!$result->execute()){
				$errors[] = 'ошибка выполнения запроса';
				return $errors;
			}
		}
		return true;
	}
}
