<?php $this->load->view('header.php');?>

<div class="container">

<h2>Rooms & Tariff</h2>

<?php foreach ($room as $value): ?>
<!-- form -->

<div class="row">
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="<?= base_url()?>/images/photos/<?= $value->image?>" class="img-responsive"><div class="info"><h3>Luxirious Suites ( <?= $value->Type;?> )</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="<?= base_url()?>Project/details/<?php echo $value->room_id;?>" class="btn btn-default">Check Details</a></div></div></div>

<?php endforeach ; ?>
                    


</div></div>
<?php include 'footer.php';?>