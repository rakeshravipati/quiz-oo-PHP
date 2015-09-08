<?php 

require_once INCLUDES_PATH."questions_model.php";

class Questions{

	private $questionm;

	public function __construct(){
		global $question_model;
		$this->questionm = $question_model;
	}

	public function getQuestionBySubject($id){
		return $this->questionm->getQuestionsById($id);
	}


	public function create($post){
		return $this->questionm->createQuestions($post);
	}

	public function formatQuizPost(&$post){
		foreach ($post as $key => $value) {
			if(is_array($value)){
				$post[$key] = implode(',',$value); 
			}
		}
	}

}

$question = new Questions();
?>	