<?php $this->load->view('header.php');?>

<div class="container">

<h2>Rooms & Tariff</h2>

<?php foreach ($room as $value): ?>
<!-- form -->

<div class="row">
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="<?= base_url()?>/images/photos/<?= $value->image?>" class="img-responsive"><div class="info"><h3>Luxirious Suites ( <?= $value->Type;?> )</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="<?= base_url()?>Project/details/<?php echo $value->room_id;?>" class="btn btn-default">Check Details</a></div></div></div>

<?php endforeach ; ?>
                     <div class="text-center">
                     <ul class="pagination">
                     <li class="disabled"><a href="#">«</a></li>
                     <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">»</a></li>
                     </ul>
                     </div>


</div>
<?php include 'footer.php';?>