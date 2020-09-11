<?php
include ('user_profile.php');
include ('user_profile_sec1.php');
?>
<html>

<head>
    <title>Hyde International Talents (UK) | Step three: Summary Information</title>
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
    <script src="/javascript/add-info.js"></script>
</head>

<body>
    <section id="top" class="category-hero">
        <header id="header">
            <div class="brand-container">
                <a class="brand" href="/">
                    Hyde International Talents
                    <!-- <img src="/img/logo.png" class="logo"> -->
                </a>
            </div>
            <nav class="main-nav">
                <a class="nav-item" href="/" style="color: white;">Home</a>
                <a class="nav-item" href="/jobPages/category-page.html" style="color: white;">Jobs</a>
                <a class="nav-item" href="/about-page.html" style="color: white;">About</a>
                <a class="nav-item" href="/contact-page.html" style="color: white;">Contact</a>
                <div class="sign-in">
                    <a class="nav-item user" href="accounts/login.html">
                        <a href="#">Logout</a>
                    </a>
                </div>
            </nav>
            <!-- <div class="mobile-menu">
            <a href="/">Home</a>
            <a href="/">Jobs</a>
            <a href="/">About</a>
            <a href="/#experience-section">Contact</a>
          </div> -->
        </header>
    </section>


    <header class="upper-info">
        <div class="left-header">
            <?php 
            $welcome = "Hi " . $_SESSION['userid'] ." Welcome to Hyde International Talents (HIT) profile" ;
            echo "$welcome" ;
            ?></div>
        <div class="right-header"></div>
    </header>

    <div class="box">
        <div class="left-part">
            <div class="img-profile">
                <button type="button" class="button">Upload</button>
            </div>
            <div class="left-part-lower">
                <div class="userid">
                    <i>UserName:</i>
                    <br>
                    <b><?php echo $email; ?></b>
                    <br>
                    <a href="/accounts/User_profile_1st_page.html">Edit Information</a>
                    <br>
                    <i>HIT Cv</i>
                </div>
                <div class="modify-box">
                    <i>CV</i>
                    <a href="#">
                        <ion-icon name="build-outline"></ion-icon>
                    </a><br>
                    <b><?php echo $cvfile; ?></b>
                </div>
                <div class="modify-box">
                    <i>Change Password</i>
                    <a href="#">
                        <ion-icon name="build-outline"></ion-icon>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="right-info" id="general-information-form">
                <!--Step 1 info-->
                <h2>General Information</h2>
                <hr>
                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">First Name: </label>
                        <br><label for="validationTooltip01"><?php echo $fname; ?></label>
                    </div>
                    <div class="col">
                        <label for="validationTooltip01">Last Name:</label>
                        <br> <label for="validationTooltip01"><?php echo $lname; ?></label>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Email: </label>
                        <br> <label for="validationTooltip01"><?php echo $email; ?></label>
                    </div>
                    <div class="col">
                        <label for="validationTooltip01">Contact Number:</label>
                        <br> <label for="validationTooltip01"><?php echo $tel; ?></label>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">D.O.B: </label>
                        <br><label for="validationTooltip01"><?php echo $lname; ?></label>
                    </div>
                    <div class="col">
                        <label for="validationTooltip01">Nationality:</label>
                        <br> <label for="validationTooltip01"><?php echo $dob; ?></label>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Area of Expertise: </label>
                        <br> <label for="validationTooltip01"><?php echo $expertise; ?></label>
                    </div>
                    <div class="col">
                        <label for="validationTooltip01">Professional Field:</label>
                        <br> <label for="validationTooltip01"><?php echo $professional; ?></label>
                    </div>
                </div>
                <br>

                <!--Step 2 info-->
                <h2>Experience, Achievement, Publication and Contribution Summary</h2>
                <hr>
                <div class="form-row ">
                    <div class="col">
                        <label for="validationTooltip01">Education Experience: </label>
                        <br>
                        <p for="validationTooltip01"><?php echo $edu; ?></p>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Working Experience:</label>
                        <br>
                        <p for="validationTooltip01"><?php echo $work; ?></p>
                    </div>
                </div>
                <br>

                <div class="form-row small-tbl">
                    <div class="col">
                        <label for="validationTooltip01">Projects: </label>
                        <br>
                        <p for="validationTooltip01"><?php echo $project; ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Patents:</label>
                        <br>
                        <p for="validationTooltip01"><?php echo $patent; ?></p>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Field of Speacility: </label>
                        <br>
                        <p for="validationTooltip01"><?php echo $fieldspeciality; ?></p>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Awards:</label>
                        <br>
                        <p for="validationTooltip01"><?php echo $awards; ?></p>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Products: </label>
                        <br>
                        <p for="validationTooltip01"><?php echo $products; ?></p>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Publication:</label>
                        <br>
                        <p for="validationTooltip01"><?php echo $publication; ?></p>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Recent Major Research Projects: </label>
                        <br>
                        <p for="validationTooltip01"><?php echo $researchproject; ?></p>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip01">Collaborative Project Proposal:</label>
                        <br>
                        <p for="validationTooltip01"><?php echo $projectproposal; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
                            class="fa fa-envelope" style="margin-left: 8px;" aria-hidden="true"></div>
                        uk@hyde-china.com
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

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html>