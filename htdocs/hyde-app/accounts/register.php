<?php
include ('PHP/insert.php');
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
                        <h2>Sign up</h2>
                        <h4>Register now and get access to amazing opportunities</h4>
                        <br>
                        <h4>Already a User? <a href="login.php">Login</a></h4>
                    </div>
                    <form class="registerLogin-form" action="register.php" enctype="multipart/form-data" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <label for="validationTooltip01">First name</label>
                                <input type="text" class="form-control" placeholder="Jane" name="fname">
                                <label
                                    class="text-danger"><?php if(isset($error['fname_error'])) echo $error['fname_error']; ?></label>
                            </div>
                            <div class="col">
                                <label for="validationTooltip01">Last name</label>
                                <input type="text" class="form-control" placeholder="Doe" name="lname">
                                <label
                                    class="text-danger"><?php if(isset($error['lname_error'])) echo $error['lname_error']; ?></label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="name@example.com"
                                    name="email">
                                <label
                                    class="text-danger"><?php if(isset($error['email_error'])) echo $error['email_error']; ?></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="validationTooltip01">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="******"
                                    name="pwd">
                                <label
                                    class="text-danger"><?php if(isset($error['pwd_error'])) echo $error['pwd_error']; ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone number</label>
                            <input type="tel" class="form-control" id="inputPhoneNumber" placeholder="796-644-8844"
                                name="tel">
                            <label
                                class="text-danger"><?php if(isset($error['tel_error'])) echo $error['tel_error']; ?></label>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="cvfile">
                            <label class="custom-file-label" for="customFile">Upload CV</label>
                            <label
                                class="text-danger"><?php if(isset($error['cvfile_error'])) echo $error['cvfile_error']; ?></label>
                        </div>
                        <button type="submit" class="apply-btn create_btn" name="register"> Create Account</button>
                    </form>
                </div>
                <div class="col-md-6 bg-col">
                    <div class="register-bg_image">
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
                        <div class="fa fa-phone" aria-hidden="true"></div>+44 (0) 207 038 7865<div
                            class="fa fa-envelope" style="margin-left: 8px;" aria-hidden="true"></div>uk@hyde-china.com
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