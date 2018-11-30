

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?= base_url() ?>css/ss.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Login</h1>
    <div>
    <a style="float: right; color: white" href="<?= base_url()?>Login/admin">Adminstrator</a>
  </div>

    <form class="form" action="<?= base_url()?>Login/loguser" method="post" enctype="multipart/form-data">
      <div class="alert alert-error"></div>
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      
      <input type="submit" value="Login" name="register" class="btn btn-block btn-primary" />
      <a style="color: white" href="<?= base_url()?>Login/registration">Resgister</a>

    </form>

  </div>
</div>


