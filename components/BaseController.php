<?php
/**
* 
*/
abstract class BaseController
{
	public $options = array(
		'title'=>'Page title',
	);
	public static function configSite()
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM configure WHERE status="1"');
		$configList = array();
		$i=0;
		while($row = $result->fetch()){
			$configList[$i]['id'] = $row['id'];
			$configList[$i]['name'] = $row['name'];
			$configList[$i]['value'] = $row['value'];
			$configList[$i]['sec_value'] = $row['sec_value'];
			$i++; 
		}
		
	}
	public static function getView($dir = false, $view)
	{
		$view = $view.'.php';
		$layout = ROOT.'/views/layouts/site_layout.php';
		$noView = ROOT.'/views/404.php';
		if($dir == false){
			$path = ROOT.'/views/'.$view;
		}else{
			$path = ROOT.'/views/'.$dir.'/'.$view;
		}
		
		if(file_exists($path)){
			
			
			return $path;
		}

		return $noView;
	}

}