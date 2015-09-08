<?php 


class Questions_Model{


	const TABLE_NAME = 'questions';

	public function __construct(){
	}

	/**
	 * [getQuestionsBySubject description]
	 * @param  [type] $subjectid [description]
	 * @return [type]            [description]
	 * 
	 * Question based on user selection of subject..
	 */
	public function getQuestionsById($subjectid){;
		$data = [];
		$qry = "SELECT * FROM ".self::TABLE_NAME." WHERE `subject_id` = $subjectid ";
		$qid = mysql_query($qry);
		while ($row = mysql_fetch_assoc($qid)){
			$data[] = $row;
		} 
		return $data;

	}

	public function createQuestions($post){
		$qry = "INSERT INTO `".self::TABLE_NAME."` (`subject_id`,`question`,`type`,`option1`,`option2`, `option3`, `option4`, `answer`) VALUES ($post[subject_id], '$post[question]', '$post[type]', $post[option1], $post[option2], $post[option3], $post[option4], '$post[answer]')";
		//exit;
		mysql_query($qry);
		if(mysql_insert_id())
			return TRUE;
		else 
			return FALSE;
	}
}

$question_model = new Questions_Model();

?>