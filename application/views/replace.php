<?php include 'header.php';
foreach ($id as $value) :?>
<div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="<?php echo base_url(); echo $value->images;?>" class="img-responsive"></div></div></div>


<?php endforeach;
include 'footer.php';?>