<?php 
	require_once "includes/config.php";
	require_once "includes/subject.php";

	echo BASE_PATH;
	echo INCLUDES_PATH;

	$subjects = $subject->getSubjects();

	echo "<pre>";
	print_r($subjects);



?>