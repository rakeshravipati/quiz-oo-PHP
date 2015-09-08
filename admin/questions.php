<?php
	require_once "../includes/config.php";
	require_once INCLUDES_PATH."questions.php";
	require_once INCLUDES_PATH."subject.php";
	
	$status = false;
	if(!empty($_POST) && isset($_POST) && isset($_POST['save'])){
/*		echo "<pre>";
		print_r($_POST);
		exit;*/
		$status = $question->create($_POST);
	}
	$subjects = $subject->getSubjects();

	include TEMPLATES_PATH."header.php"; 
		if($status):
?>
		<div>Question created successfully..</div>
	<?php
		endif;
	?>
	<form action="" method="post" name="subject">
		<div style="margin-bottom:5px;">
			<label for="subject_id">Subject
			<select name="subject_id" id="subject_id">
				<option value="">Select Subject</option>
				<?php 
					foreach ($subjects as $key => $value):
				?>
					<option value="<?=$value['id'];?>"><?=$value['name'];?></option>
				<?php 
					endforeach;
				?>
			</select>
			</label>
		</div>
		<div style="margin-bottom:5px;">
			<label for="name">Question
				<input type="text" name="question">
			</label>
		</div>
		<div style="margin-bottom:5px;">
			<label for="subject_id">Subject
			<select name="type" id="type">
				<option value="">Select Type</option>
				<option value="radio">Radio</option>
				<option value="checkbox">Checkbox</option>
			</select>
			</label>
		</div>
		<div style="margin-bottom:5px;">
			<label for="option1">Option1
				<input type="text" name="option1" id="option2">
			</label>
		</div>
		<div style="margin-bottom:5px;">
			<label for="option2">Option2
				<input type="text" name="option2" id="option2">
			</label>
		</div>
		<div style="margin-bottom:5px;">
			<label for="option3">Option3
				<input type="text" name="option3" id="option3">
			</label>
		</div>
		<div style="margin-bottom:5px;">
			<label for="option4">Option4
				<input type="text" name="option4" id="option4">
			</label>
		</div>
		<div style="margin-bottom:5px;">
			<label for="answer">Answer
				<input type="text" name="answer" id="answer">
			</label>
		</div>
		<div>
			<input type="submit" name="save" value="Save">
		</div>
<?php 
	include TEMPLATES_PATH."footer.php";
?>	