
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">

<?php 
foreach ($room as $value):
?>
<form method="post" action="<?= base_url()?>Admin/update/<?= $value->room_id?>" enctype="multipart/form-data"><br><br><br><br>
	<div class="body-content">
  <div class="module">
	<div>Room ID</div>
	<input style="padding: 10px;margin: 10px;" type="text" name="room_id" value="<?= $value->room_id?>"><br><br>
	<div>Room Check</div>
	<input style="padding: 10px;margin: 10px;" type="text" name="Check" value="<?= $value->Check?>">
	<br><br>
	<div>Room Type</div>
	<input style="padding: 10px;margin: 10px;" type="text" name="Type" value="<?= $value->Type?>">
	<br><br>
	<div>User ID</div>
	<input style="padding: 10px;margin: 10px;" type="text" name="User ID" value="<?= $value->user_id?>">
	<br><br>
	<div>Number Card</div>
	<input style="padding: 10px;margin: 10px;" type="text" name="Number_Card" value="<?= $value->num_card?>">
	<br><br>
            <div style="font-weight: bold;">Old image</div>
            <img src="<?= base_url()?>images/photos/<?= $value->image ?>" style="height:280px;" alt="" /> </a><br><br><br>
            <div style="font-weight: bold;">New image</div>
             <div class="form-group">
                          <input type="file" name="image">
                        </div>
	<input style="padding: 10px;margin: 10px;" type="submit" value="Update"><br><br><br><br>
</div>
</div>
</form>
<?php endforeach; ?>

