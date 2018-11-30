<?php include 'header.php';?>

<div class="container">
<?php foreach ($roo as $value): ?> 

<h1 class="title">Luxirious Suites</h1>

 <!-- RoomDetails -->
 <div class="room-features spacer">
  <div class="row">
 <div class="col-sm-3 col-md-2">
      <div class="size-price"><span><a href="<?= base_url()?>Project/reserve/<?= $value->room_id?>"> Reservation</a></span></div>
</div>

    </div>
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img style="display: block;margin-left: auto;margin-right: auto;width: 50%;" src="<?= base_url()?>/images/photos/<?= $value->image?>" class="img-responsive" ></div>
                <!-- Controls --> 
                <a class="left carousel-control" href="#RoomDetails" role="button"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button"><i class="fa fa-angle-right"></i></a>
            </div>

  <!-- RoomCarousel-->
<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p>Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.</p>
    <p>By Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect's natural. Don't stubbornly. Don't stubbornly. Don't stubbornly. -And Gain Power By Learning Ways To Become Peaceful. </p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Amenitites</h3>    
    <ul>
      <li>One of the greatest barriers to making the sale is your prospect.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Unlucky people. Don't stubbornly.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Space in your house How to sell faster than your neighbors</li>
    </ul>
  </div>
   
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Size<span><?= $value->Size;?> m</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span><?= $value->Price;?></span></div>
    </div>
  </div>
</div>
                     
    <?php endforeach ;?>


<?php include 'footer.php';?>