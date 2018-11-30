
<?php include 'header.php';?>




<!-- banner -->
<div class="banner">           
    <img src="<?= base_url()?>images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">4MK</h1>
                <p class="animated fadeInUp">Most luxurious hotel of africa with the royal treatments and excellent customer service.</p>                
            </div>
            
        </div>
    </div>
</div>
<!-- banner-->


<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4" style="width:900px; margin:10 auto; padding: 40px;">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="<?= base_url()?>images/page_1.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="<?= base_url()?>images/photos/page_2.jpg"  class="img-responsive" alt="slide"></div>
                
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div style="text-align: center; font-size: 20px" class="caption"><a href="<?= base_url()?>Project/menu">Menu</a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>