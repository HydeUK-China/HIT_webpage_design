<?php
include ('PHP/Ad_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hyde International Talents (UK) | Bright future ahead</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Themify icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Site CSS -->
  <link rel="stylesheet" href="/hyde-app/css/main.css">
</head>

<body>
  <!-- Start of hero section-->
  <section class="registerLogin-page">
    <div class="content-box container">
      <div class="row">
        <div class="col-md-6 form-col">
          <div class="logo-container">
            <a class="logo" href="/" style="color: black;">
              Hyde International Talents
              <!-- <img src="/img/logo.png" class="logo"> -->
            </a>
          </div>
          <div class="registerLogin-title_content">
            <h2>Admin Portal Log in </h2>
          </div>
          <form class="registerLogin-form" method="POST" action="admin_login.php" enctype="multipart/form-data">
            <div class="form-group ">
              <label for="email">Username</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="HIT Admin" name="uname">
            </div>
            <div class="form-group">
              <label for="validationTooltip01">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="*******" name="pwd">
            </div>
            <button name='login' class="apply-btn create_btn">Log in</button>
          </form>
        </div>
        <div class="col-md-6 bg-col">
          <div class="login-bg_image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of hero section-->

</body>

</html>