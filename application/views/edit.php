<?php include 'header.php';
	
?>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">
<div class="body-content">
  <div class="module">

<form action="<?= base_url()?>Project/cancel/<?php echo $this->session->userdata('data')['user_id'];?>">
	
	<input type="submit" value="Cancel Room" name="cancel" class="btn btn-block btn-primary" /><br>
</form>



<?php foreach ($o as $value) :?>
<form method="post" action="<?= base_url()?>Project/rooms">
<?php endforeach;?>
	<input type="submit" value="Replace Room" name="replace" class="btn btn-block btn-primary" /><br>
</form>




<form action="<?= base_url()?>Project/check/<?php echo $this->session->userdata('data')['user_id'];?>">

	<input type="submit" value="Check Out" name="out" class="btn btn-block btn-primary" />
</form>
</div></div>
<?php include 'footer.php'; ?>