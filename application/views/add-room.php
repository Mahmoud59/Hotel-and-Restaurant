
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">
<div class="body-content">
  <div class="module">
<form method="post" action="<?= base_url()?>Admin/toadd_room" enctype="multipart/form-data">
	<div class="alert alert-error"></div>
      <div>Location</div>
      <input style="padding: 8px; color: white;" type="number" name="Location" required /><br><br>
      <div>Size</div>
      <input style="padding: 8px; color: white;" type="number" name="Size" required /><br><br>
      <div>Price</div>
      <input style="padding: 8px; color: white;" type="number" name="Price" required /><br><br>
        <div class="alert alert-error"></div>
        <div>Check</div>
      <input style="padding: 8px; color: white;" type="number" name="Check" required />
      
        <div class="col-half"><br>
        <h4>Type</h4><br>
        <div class="input-group">
          <input type="radio" name="Type" value="Single"/>&nbsp
          <label>Single</label> &nbsp&nbsp
          <input type="radio" name="Type" value="Double"/>&nbsp
          <label>Double</label>&nbsp&nbsp
          <input type="radio" name="Type" value="Triple"/>&nbsp
          <label>Triple</label>
        </div>
      </div><br>
      Image <br><br>
      <input type="file" name="image" >
      <input type="submit" value="Add" name="add" class="btn btn-block btn-primary" />
</form>
</div></div>
