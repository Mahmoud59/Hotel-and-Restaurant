
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">

<?php foreach ($o as $value) :?>
<div style="line-height: 17px; text-align: right; font-size: 20px; margin: 30px 40px">

  	<p>User ID : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->user_id?> </p><br>
  	<p>Room ID : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->room_id?> </p><br>
	<p>From : &emsp;&emsp;&emsp;&emsp;<?= $value->res_from?> </p><br>
	<p>To : &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<?= $value->res_to?> </p><br>
	<p>Type of room : &nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;<?= $value->Type?> </p><br>
	<p>Total of room : &emsp;&emsp;&emsp;&emsp;<?= $value->total_days?> </p><br>
	<p>Food : &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->Food?> $</p><br>
	<p>Services : &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->Services?> $</p><br>
	
	<div><p>Total = &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= $value->total_price?> $</p><br></div>
</div>
<?php endforeach?>







<div style="margin: -310px 40px 0px 0px">

<?php foreach ($user as $value) :?>
<form method="post" action="<?= base_url()?>Admin/update_user/<?php echo $value->user_id;?>">
<div class="body-content">
  <div class="module">
	<input type="text" name="username" value="<?= $value->username?>">
	<input type="password" name="password" value="<?= $value->password?>">
	<input type="text" name="address" value="<?= $value->address?>">
	<input type="text" name="national_id" value="<?= $value->national_id?>">
	<input type="text" name="phone" value="<?= $value->phone?>">
	<input style="padding: 10px;margin: 10px;" type="submit" value="Update"><br><br><br><br>
</div>
</div>
</form>
	
	<a href="<?= base_url()?>Admin/control"><input style="padding: 10px;margin: -690px 10px" type="submit" value="Back"></a><br><br><br><br>
	</form>

<?php endforeach;?>