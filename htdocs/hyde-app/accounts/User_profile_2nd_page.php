<?php
include ('user_profile_sec2.php');
?>
<html>

<head>
    <title>Hyde International Talents (UK) | Second Step Information</title>
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
    <script src="/hyde-app/javascript/add-info.js"></script>
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

    <!-- left-side info -->


    <header class="upper-info">
        <div class="left-header">
            <?php 
            $welcome = "Hi " . $_SESSION['userid'] ." Welcome to Hyde International Talents (HIT) profile" ;
            echo "$welcome" ;
            ?></div>
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
                    <a href="#second-info">Edit Information</a>
                    <br>
                    <i>HIT Cv</i>
                </div>
                <div class="modify-box">
                    <i>CV</i>
                    <a href="#">
                        <ion-icon name="build-outline"></ion-icon>
                    </a>
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


        <!-- right side info-->
        <form action="user_profile_sec2.php" enctype="multipart/form-data" id="#second-info" method="POST">
            <div class="container">
                <table>
                    <tr>
                        <h2>Education Experience</h2>
                        <div class="grid-info">
                            <label for="validationTooltip01">Degree</label>
                            <label for="validationTooltip01">Time</label>
                            <label for="validationTooltip01">Country</label>
                            <label for="validationTooltip01">University</label>
                            <label for="validationTooltip01">Major</label>
                        </div>
                    </tr>
                    <tr>
                        <textarea name="education" id="educationID" class="large-info-box" placeholder="(E.g.) Current - Past
1. Bachelor 1988/09 – 1992/07 china Peking University Mechanical Engineering"></textarea>
                    </tr>
                </table>

                <br>
                <table>
                    <tr>
                        <h2>Work Experience</h2>
                        <div class="grid-info">
                            <label for="validationTooltip01">Postion</label>
                            <label for="validationTooltip01">Time</label>
                            <label for="validationTooltip01">Country</label>
                            <label for="validationTooltip01">Employer</label>
                        </div>
                    </tr>
                    <tr>

                        <textarea name="working" id="workingID" class="large-info-box" placeholder="(E.g. ) Current - Past
1. Principal Reseracher 20/14/09-20/17/12 USA General Electric Company"></textarea>
                    </tr>
                </table>

                <br>
                <table>
                    <tr>
                        <h2>Projects</h2>
                        <div class="grid-info">
                            <label for="validationTooltip01">Time</label>
                            <label for="validationTooltip01">Nature and Source of Project</label>
                            <label for="validationTooltip01">Total amount of budget</label>
                            <label for="validationTooltip01">No of Participants</label>
                            <label for="validationTooltip01">Position and Responsibility</label>
                        </div>
                    </tr>
                    <tr>

                        <textarea name="projects" id="projectID" class="large-info-box"
                            placeholder="(E.g. ) Current - Past
1. 20/18/01-20/19/03 | Development of manganese-based lithiumion batteries and supercapacitors (funded by DST/NRF) |$1000,0000 | 25 | R & D Manager and Principal Investigator "></textarea>
                    </tr>
                </table>
                <br>

                <table>
                    <tr>
                        <h2>Patents</h2>
                        <div class="grid-info">
                            <label for="validationTooltip01">Date of Filling</label>
                            <label for="validationTooltip01">Publication Number</label>
                            <label for="validationTooltip01">Patent Title</label>
                            <label for="validationTooltip01">State of Organization</label>
                            <label for="validationTooltip01">Assignee</label>
                        </div>
                    </tr>
                    <tr>

                        <textarea name="patent" id="patentID" class="large-info-box"
                            placeholder="(E.g. ) Current - Past
1. Date Filling (2018) | Publication Number(#98120393) | Patent Title (General Electric Cooker) | Organization (Company C) | Assignee (Company C Chairman) "></textarea>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <h2>Field of Speciality</h2>
                    </tr>
                    <tr>
                        <textarea name="fieldofspecialty"
                            placeholder="Field of Specialty (Main research areas, Previous research results, Industry and international influence)："
                            class="large-info-box"></textarea>
                    </tr>
                </table>
                <table>
                    <tr>
                        <h2>Awards</h2>
                        <textarea name="awards" placeholder="Awards and Honours" class="large-info-box"></textarea>

                    </tr>
                </table>
                <br>
                <table>
                    <h2>Products</h2>
                    <textarea name="products"
                        placeholder="Product introduction, current industrialization level and industry competitiveness）"
                        class="large-info-box"></textarea>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <h2>Publication Date</h2>
                        <div class="grid-info">
                            <label for="validationTooltip01">Publication Date</label>
                            <label for="validationTooltip01">Title of Paper</label>
                            <label for="validationTooltip01">Publication Media</label>
                            <label for="validationTooltip01">Number of Authors</label>
                            <label for="validationTooltip01">Author Rank</label>
                        </div>
                    </tr>
                    <tr>
                        <textarea name="pd"
                            placeholder="(E.g. ) Current - Past 
2014, ADVANCES IN ENGINEERING RESEARCH, Volume 8, chapter 2, Adsorption Refrigeration, Victoria M. Petrova Editor. Nova Publishers. New York, Ahmed Rezk, Ahmed Elsayed, Saad Mahmoud, and Raya AL-Dadah."
                            class="large-info-box"></textarea>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <h2>Recent Major Research Projects</h2>
                        <textarea name="rmrp"
                            placeholder="(E.g. ) Current - Past 
Project briefs, innovations compared to existing technologies, current developments and technical difficulties, expected results and industry, and international influence"
                            class="large-info-box"></textarea>

                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <h2>Collaborative Project Proposal</h2>
                        <textarea name="cpp" placeholder="Project Proposal With China"
                            class="large-info-box"></textarea>
                    </tr>
                </table>
                <div style="margin-top: 10px;"><input type="checkbox" required style="width: 20px;"><label>i agree to
                        the
                        Hyde International Talents
                        (HIT) <a href="/terms.html">
                            <underline class="highlight">Terms of Service</underline>
                        </a> and <a href="/privacy.html">
                            <underline class="highlight">
                                Privacy Policy.
                            </underline>
                        </a></label></tr>
                </div>
                <div style="margin-top:10px;"><button type="submit" class="apply-btn create_btn"
                        name="update">Update</button></div>
            </div>
        </form>
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

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html>