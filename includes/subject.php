<?php 

require_once INCLUDES_PATH."subject_model.php";

class Subject{

	public $subjectm;

	public function __construct(){
		global $subject_model;
		$this->subjectm = $subject_model;
	}

	public function getSubjects(){
		$data = $this->subjectm->findAllSubjects();
		return $data;
	}

	public function createSubject($post){
		return $this->subjectm->saveSubject($post);
	}

	public function getTotal(){
		return $this->subjectm->totalSubject();
	}

	public function checkAttributeValue($attr, $value){
		return $this->subjectm->checkAttribute($attr,$value);
	}
}

$subject = new Subject();

?>