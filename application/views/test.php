<?php //include 'header2.php';

foreach ($col as $value) :?>
<form action="<?= base_url()?>Test/out/<?php echo $this->session->userdata('ss')['user_id'];?>/<?= $value->Services;?>" method="post"><?php 
 endforeach; ?>
	<input type="text" name="t"><br>
	<input type="submit" value="Choose" name="register" class="btn btn-block btn-primary" />
	<br>
</form>	
<span><?= "string"; ?></span>

