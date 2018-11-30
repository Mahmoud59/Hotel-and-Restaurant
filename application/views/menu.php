<?php include 'header.php';?>

	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">
<form action="<?= base_url()?>Project/calcf/<?php echo $this->session->userdata('data')['user_id'];?>" method="post">

<div class="body-content">
  <div class="module" style="line-height: 1px">
	<?php $id=0;foreach ($food as $value):?>

		<input type="checkbox" name="<?php echo $id++; ?>" value="<?= $value->price ?>"><span>&emsp;<?= $value->name;?> &emsp;&emsp;&emsp;&emsp; <?= $value->price;?></span><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php endforeach ;?>
		<input type="submit" value="Choose" name="register" class="btn btn-block btn-primary" />
</div>
</div>
</form>
<?php include 'footer.php';?>