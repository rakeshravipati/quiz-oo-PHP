<div>
	<strong>Question <?=$key+1;?></strong><br/>
	<?=$value['question'];?>
	<div><input type="radio" name='<?=$value['id']?>' value='1'><?=$value['option1'];?></div>
	<div><input type="radio" name='<?=$value['id']?>' value='2'><?=$value['option2'];?></div>
	<div><input type="radio" name='<?=$value['id']?>' value='3'><?=$value['option3'];?></div>
	<div><input type="radio" name='<?=$value['id']?>' value='4'><?=$value['option4'];?></div>
</div>