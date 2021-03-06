<?php
include ("PHP/userlogin.php");
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
            <h2>Log in</h2>
            <h4>Don't have an account?<a href="register.html">Sign up</a></h4>
          </div>
          <form class="registerLogin-form" action="login.php" enctype="multipart/form-data" method="POST">
          <div class="form-group ">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="name@example.com" name="email" required>
            </div>
            <div class="form-group">
              <label for="validationTooltip01">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="*******" name="pwd" required>
            </div>
            <button type="submit" class="apply-btn create_btn" name="login">Log in</button>
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
  <!--Footer-->
  <footer class="footer">
    <div class="socials">
      <div class="title">follow us</div>
      <div class="links">
        <a href="#"><span class="ti-google"></span></a>
        <a href="#"><span class="ti-facebook"></span></a>
        <a href="#"><span class="ti-twitter-alt"></span></a>
        <a href="#"><span class="ti-instagram"></span></a>
      </div>
    </div>
    <div class="contact-us">
      <div class="title">Contact us</div>
      <div class="address">
        <ul>
          <li>
            <div class="fa fa-phone" aria-hidden="true"></div>+44 (0) 207 038 7865<div class="fa fa-envelope"
              style="margin-left: 8px;" aria-hidden="true"></div>uk@hyde-china.com
          </li>
          <li>
            International (UK) 37th Floor, One Canada Square
            Canary Wharf, London, United Kingdom, E14 5AA
          </li>
        </ul>
      </div>
    </div>
    <div class="support">
      <div class="title">support</div>
      <div class="help">
        <i><a href="#"><span class="faq">faq</span></a></i>
        <br>
        <i><a href="privacy.html"><span class="privacy">privacy</span></a></i>
        <br>
        <i><a href="terms.html"><span class="terms">terms</span></a></i>
      </div>
    </div>
  </footer>
  <div class="copyright">
    <p>All rights reserved &copy;. Powered by the <i>Hyde International Talents (HIT)</i></p>
  </div>
</body>

</html>