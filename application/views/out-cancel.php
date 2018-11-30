<?php include 'header.php';?>

	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">

<?php foreach ($o as $value) :?>
<form method="post" action="<?= base_url()?>Project/kill_cancel/<?php echo $value->room_id; ?>"><div class="body-content">
  <div class="module" style="line-height: 1px">	
	<p>&emsp;From : &emsp;&emsp;<?= $value->res_from?> </p><br>
	<p>&emsp;To : &emsp;&emsp;<?= $value->res_to?> </p><br>
	<p>&emsp;Total of room : &emsp;&emsp;<?= $value->total_days?> </p><br>
	<p>&emsp;Food : &emsp;&emsp;<?= $value->Food?> $</p><br>
	<p>&emsp;Services : &emsp;&emsp;<?= $value->Services?> $</p><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div><p>&emsp;Total = &emsp;<?= $value->total_price?> $</p><br></div>
	<input type="submit" value="Confirm cancel" name="register" class="btn btn-block btn-primary" />
	</div>
</div>
</form>	
<?php endforeach?>
<?php include 'footer.php';?>

