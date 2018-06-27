<?php
require_once(ROOT.'/components/Db.php');
class About
{
	
	public static function getContactList()
	{
		$db = Db::getConnection();
		$contactList = array();
		$result = $db->query('SELECT name, status, value FROM contact WHERE status="1"');
		$i = 0;
		while($row = $result->fetch()){
			$contactList[$i]['name'] = $row['name'];
			$contactList[$i]['value'] = $row['value'];
			
			$i++;
		}

		return $contactList;
	}
}