<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hyde International(UK) | Admin Profile | Exper Database</title>
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
    <section id="top" class="category-hero">
        <header id="header">
            <div class="brand-container">
                <a class="brand" href="/">
                    Hyde International Talents
                    <!-- <img src="/img/logo.png" class="logo"> -->
                </a>
            </div>
            <nav class="main-nav">
                <a class="nav-item user" href="admin_dashboard.html" style="color: white;">Dashboard</a>
                <a class="nav-item user" href="admin_expert_database.html" style="color: white;">Expert
                    Database</a>
                <a class="nav-item user" href="project_proposal_collaboration.html" style="color: white;">Project
                    Porposal Collaboration</a>
                <a class="nav-item user" href="expert_assessment.html" style="color: white;">Expert
                    Assessment</a>
                <div class="sign-in">
                    <a class="nav-item user" href="#">
                        Logout
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

    <!--contianer-->

    <section class="database">
        <header class="welcome-admin">Welcome to Hyde International Talents (HIT) Admin Portal</header>
        <?php
            include ('../PHP/Server.php');

            if(isset($_POST['fsearch'])){
                $searchKey = $_POST['fsearch'];
                $sql = "SELECT * from `Applicant_Information` where `First_Name`='$searchKey'";


            }else{
                $sql = "SELECT * from Applicant_Information";
            }
            
            $output = mysqli_query($conn,$sql);
            ?>
        <form action='' enctype="multipart/form-data" class="search" method="POST">
            <label for="validationTooltip01">Applicant's Name Search :</label>
            <input type="text" name="fsearch" placeholder="John" required>
            <button class="search-btn">Search</button>
        </form>


        <div class="database">
            <table>
                <tr>
                    <th><label for="validationTooltip01">Applicant ID</label></th>
                    <th> <label for="validationTooltip01">Title</label></th>
                    <th> <label for="validationTooltip01">First Name</label></th>
                    <th> <label for="validationTooltip01">Last Name</label></th>
                    <th> <label for="validationTooltip01">Expertise</label></th>
                    <th> <label for="validationTooltip01">Research Field</label></th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($output)) { ?>
                <tr>
                    <td><?php echo $row['applicant_id'];?></td>
                    <td><?php echo $row['Title'];?></td>
                    <td><?php echo $row['First_Name'];?></td>
                    <td><?php echo $row['Last_Name'];?></td>
                    <td><?php echo $row['Expertise'];?></td>
                    <td><?php echo $row['Research_Field'];?></td>
                </tr>
                <?php } ?>


            </table>
            <br>
            <a href="display.php">See More</a>

        </div>

    </section>

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