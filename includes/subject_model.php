<?php 

class Subject_Model {
	const TABLE_NAME = 'subjects';
	private $fields = ['id', 'name', 'date', 'status'];

	public function __construct(){
	}

	public function findAllSubjects(){
		$data = [];
		$qid = mysql_query("select * from ". self::TABLE_NAME);
		while ($row = mysql_fetch_assoc($qid)){
			$data[] = $row;
		} 
		return $data;
	}

	public function saveSubject($post){
		$qry = "INSERT INTO `".self::TABLE_NAME."` (`name`) VALUES ('".$post['name']."')";
		mysql_query($qry);
		if(mysql_insert_id())
			return TRUE;
		else 
			return FLASE;
	}


	public function totalSubject(){
		$qid = mysql_query("select count(`id`) AS totalsubjects from ".self::TABLE_NAME);
		$row = mysql_fetch_array($qid,MYSQL_ASSOC);
		return $row['totalsubjects'];
	}

	public function checkAttribute($attr, $value){
		$str = " ".$attr." = ".$value;
		$qid = mysql_query("SELECT `id` FROM ".self::TABLE_NAME." WHERE ".$str);
		if(mysql_num_rows($qid) === 1)
			return TRUE;
		else
			return FALSE;

		exit;
	}

}

$subject_model = new Subject_Model();
?>