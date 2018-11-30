
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="<?php echo base_url(); ?>Login/register" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Username" name="username" required maxlength="30" />
      <input type="email" placeholder="Email" name="email" required maxlength="50" />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required maxlength="20" />
        <div class="alert alert-error"></div>
      <input type="number" placeholder="Age" name="age" required maxlength="3" />
      <input type="text" placeholder="Address" name="address" required maxlength="40" />
      <input type="number" placeholder="Phone number" name="phone" required maxlength="15" />
      <input type="number" placeholder="Namtional Id" name="national_id" required  />
      
        <div class="col-half"><br>
        <h4>Gender</h4><br>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label> &nbsp&nbsp
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div><br>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <a style="color: white;" href="<?= base_url()?>Login">Login</a>


    </form>
  </div>
</div>



