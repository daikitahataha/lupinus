<!doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
	<?php echo form_open_multipart('admin/roomManager/register');?><br>

    <p>地名</p>
	<?php echo form_input('place',set_value('place'));?><br>
	<?php echo form_error('place','<div class="error">',"</div>");?><br>
　　<p>運営開始日</p>
	<?php echo form_input('start_date',set_value('start_date'));?><br>
	<?php echo form_error('start_date','<div class="error">',"</div>");?><br>
    <p>部屋名</p>
	<?php echo form_input('room_name',set_value('room_name'));?><br>
	<?php echo form_error('room_name','<div class="error">',"</div>");?><br>
　　<p>住所</p>
	<?php echo form_input('room_addreess',set_value('room_addreess'));?><br>
	<?php echo form_error('room_addreess','<div class="error">',"</div>");?><br>
    <p>ADR</p>
	<?php echo form_input('room_ADR',set_value('room_ADR'));?><br>
	<?php echo form_error('room_ADR','<div class="error">',"</div>");?><br>
    
    <?php echo form_upload('image1');?><br>

	<?php echo form_upload('image2');?><br>

    <?php echo form_upload('image3');?><br>

	<?php echo form_upload('image4');?><br>

    <?php echo form_upload('image5');?><br>

	<?php echo form_upload('image6');?><br>

    <?php echo form_upload('image7');?><br>

	<?php echo form_upload('image8');?><br>

    <?php echo form_upload('image9');?><br>

	<?php echo form_upload('image10');?><br>


	<?php echo form_submit('','送信');?><br>

	<?php echo form_close();?><br>

</body>
</html>

