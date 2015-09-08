<?php
	require_once "../includes/config.php";
	require_once INCLUDES_PATH."subject.php";
	
	$subjectstatus = false;
	if(!empty($_POST) && isset($_POST) && isset($_POST['save'])){
		$subjectstatus = $subject->createSubject($_POST);
	}

	include TEMPLATES_PATH."header.php"; 
		if($subjectstatus):
?>
		<div>Subject created successfully..</div>
	<?php
		endif;
		if($subject->getTotal()):
	?>
		<a href="<?php echo BASE_URL.'/admin/questions.php'; ?>">Create Questions</a>
	<?php 
		endif;
	?>

	<form action="" method="post" name="subject">
		<div>
			<label for="name">Subject name
				<input type="text" name="name">
			</label>
		</div>
		<br>
		<div>
			<input type="submit" name="save" value="Save">
		</div>
<?php 
	include TEMPLATES_PATH."footer.php";
?>		