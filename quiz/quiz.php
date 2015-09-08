<?php
	require_once "../includes/config.php";
	require_once INCLUDES_PATH."subject.php";
	require_once INCLUDES_PATH."questions.php";
	
	$showquestions = FALSE;
	$showresults = FALSE;
	$subjects = $subject->getSubjects();

	if(isset($_GET['subjectid']) && !empty($_GET['subjectid']) && $subject->checkAttributeValue('id',$_GET['subjectid'])){
		$showquestions = TRUE;
		$questions = $question->getQuestionBySubject((int)$_GET['subjectid']);
	}

	/**
	 * Results must be moved to quiz object...
	 */
	if(!empty($_POST) && isset($_POST['submit']) && !empty($_POST['submit'])){
		$post = $_POST;
		$question->formatQuizPost($post);
		$correct = 0;
		$wrong   = 0;
		$unanswered = 0;
		$postkeys = array_keys($post);
		foreach ($questions as $key => $value) {
			$keyindex = array_search($value['id'], $postkeys);
			if($value['id'] == $postkeys[$keyindex]){
				if($value['answer'] == $post[$postkeys[$keyindex]])
					$correct++;
				else
					$wrong++;

			}else{
				$unanswered++;
			}
		}

		$showresults = TRUE;
		$showquestions = FALSE;
	}

	include TEMPLATES_PATH."header.php"; 
?>
	<!-- Showing subject list -->
	<div>
		<h3>Select Subject</h3>
		<?php 
			foreach ($subjects as $key => $value):
		?>
			<div><button><a href="<?php echo BASE_URL.'/quiz/quiz?subjectid='.$value['id']; ?>"><?=$value['name']; ?></a></button></div>
		<?php 
			endforeach;
		?>
	</div>

	<!--Showing questions after selecting subject... -->
	<?php 
		if($showquestions && !empty($questions)):
			echo "</br>";
			echo "<form  method='post'>";
			foreach ($questions as $key => $value):
				if($value['type'] === 'radio'):
					include TEMPLATES_PATH."radio_form.php";
				else:
					include TEMPLATES_PATH."checkbox_form.php";
				endif;
			endforeach;
			echo "<input type='submit' name='submit' value='Results'/>";
			echo "</form>";
		endif;
	?>

	<!--Showing response after submitting the quiz -->
	<?php 
		if($showresults):
			 include TEMPLATES_PATH."quiz_results.php";
		endif;
	?>
<?php 
	include TEMPLATES_PATH."footer.php";
?>		