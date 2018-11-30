<?php include 'header.php';?>


<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">
<div class="body-content">
  <div class="module">
<div class="col-sm-5 col-md-4">
    <?php 
foreach ($roorm as $value):
?>
<h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight" action="<?= base_url()?>Project/toreserve/<?= $value->room_id?>" method="post">
        <div>From</div><input type="date" name="from" style="background: black" required ><br><br>
        <div>To</div><input type="date" name="to" style="background: black" required >
        <br><br>
        <br><br>
        <div class="form-group">
            <div class="row">
            
            <br><br><br><br>
          </div>
        </div>
     
</div><br><br><br><br><br><br>
    <div style="padding: 120px;">
      <h4>Payment Details</h4>
      <div class="input-group">
        <input type="radio" name="payment-method" value="card" id="payment-method-card" checked="true"/>&nbsp;&nbsp;
        <label for="payment-method-card"><span><i class="fa fa-cc-visa">&nbsp;&nbsp;</i>Credit Card</span></label><br>
        <input type="radio" name="payment-method" value="paypal" id="payment-method-paypal"/>&nbsp;&nbsp;
        <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal">&nbsp;&nbsp;</i>Paypal</span></label>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Card Number" name="num" />
        <div class="input-icon"><i class="fa fa-credit-card"></i></div>
      </div>
      <input type="submit" value="Reserve" name="reserve" class="btn btn-block btn-primary" />
    </div>    
    </form>
    <?php endforeach; ?>
  </div>
</div></div>
</div>

<?php include 'footer.php';?>
