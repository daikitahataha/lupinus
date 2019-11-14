<!doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <?php echo form_open_multipart('admin/roomManager/update');?><br>
    <?= form_hidden('id',$room['id']); ?></h1>  
    <p>地名</p>
    <?php echo form_input('place',$room['place']);?><br>
    <?php echo form_error('place','<div class="error">',"</div>");?><br>
　　<p>運営開始日</p>
    <?php echo form_input('start_date',$room['start_date']);?><br>
    <?php echo form_error('start_date','<div class="error">',"</div>");?><br>
    <p>部屋名</p>
    <?php echo form_input('room_name',$room['room_name']);?><br>
    <?php echo form_error('room_name','<div class="error">',"</div>");?><br>
　　<p>住所</p>
    <?php echo form_input('room_addreess',$room['room_addreess']);?><br>
    <?php echo form_error('room_addreess','<div class="error">',"</div>");?><br>
    <p>ADR</p>
    <?php echo form_input('room_ADR',$room['room_ADR']);?><br>
    <?php echo form_error('room_ADR','<div class="error">',"</div>");?><br>
    <p>画像</p>    
    <?php echo form_upload($room['image1']);?><br>
    <?php echo form_upload($room['image2']);?><br>
    <?php echo form_upload($room['image3']);?><br>
    <?php echo form_upload($room['image4']);?><br>
    <?php echo form_upload($room['image5']);?><br>
    <?php echo form_upload($room['image6']);?><br>
    <?php echo form_upload($room['image7']);?><br>
    <?php echo form_upload($room['image8']);?><br>
    <?php echo form_upload($room['image9']);?><br>
    <?php echo form_upload($room['image10']);?><br>

    <?php echo form_submit('','送信');?><br>
    <?php echo form_close();?><br>

</body>
</html>

