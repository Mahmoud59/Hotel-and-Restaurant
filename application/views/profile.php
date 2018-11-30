<?php include 'header.php';?>

	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">

<?php foreach ($o as $value) :?>
<div style="line-height: 1px; text-align: center; font-size: 20px">
	<div class="body-content">
  <div class="module">
  	<p>User ID : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->user_id?> </p><br>
  	<p>Room ID : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->room_id?> </p><br>
	<p>From : &emsp;&emsp;&emsp;&emsp;<?= $value->res_from?> </p><br>
	<p>To : &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<?= $value->res_to?> </p><br>
	<p>Type of room : &emsp;&emsp;&emsp;&nbsp;<?= $value->Type?> </p><br>
	<p>Total of room : &emsp;&emsp;&emsp;&emsp;<?= $value->total_days?> </p><br>
	<p>Food : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->Food?> $</p><br>
	<p>Services : &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->Services?> $</p><br>
	<br><br><br><br><br><br>
	<div><p>Total = &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->total_price?> $</p><br></div>
</div>
</div>
</div>
<?php endforeach?>

<?php include 'footer.php';?>