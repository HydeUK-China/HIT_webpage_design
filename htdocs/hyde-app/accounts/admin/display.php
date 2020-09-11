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
    <style>
    a {
        font-size: 30px;
        position: absolute;
        right: 5%;
        top: 0%;
    }
    </style>
</head>

<body>

    <h1>Expert Database in Details</h1>

    <a href="admin_expert_database.php">Back</a>
    <br>

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
    <br>
    <br>
    <table>
        <tr>
            <th>Applicant ID</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nationality</th>
            <th>Expertise</th>
            <th>Research Field</th>
            <th>Education History</th>
            <th>Working History</th>
            <th>Membership of professional bodies</th>
            <th>Contribution and Research</th>
            <th>Funded Activities</th>
            <th>Awards</th>
            <th>Patents</th>
            <th>Publication</th>
            <th>Collaborative proposal</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($output)) { ?>
        <tr>
            <td><?php echo $row['applicant_id']; ?></td>
            <td><?php echo $row['Title']; ?></td>
            <td><?php echo $row['First_Name']; ?></td>
            <td><?php echo $row['Last_Name']; ?></td>
            <td><?php echo $row['Nationality']; ?></td>
            <td><?php echo $row['Expertise']; ?></td>
            <td><?php echo $row['Research_Field']; ?></td>
            <td><?php echo $row['Education']; ?></td>
            <td><?php echo $row['Employment']; ?></td>
            <td><?php echo $row['Membership_of_Professional_bodies']; ?></td>
            <td><?php echo $row['Scientific_contribution_and_Research_Leadership']; ?></td>
            <td><?php echo $row['Awarded_Grants_and_Funded_Activities']; ?></td>
            <td><?php echo $row['Awards_and_Honors']; ?></td>
            <td><?php echo $row['Patents']; ?></td>
            <td><?php echo $row['Publications']; ?></td>
            <td><?php echo $row['Potential_Collaborative_Project_Proposal']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>