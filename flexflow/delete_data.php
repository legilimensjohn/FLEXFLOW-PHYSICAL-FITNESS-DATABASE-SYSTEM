<?php
$id = $_GET['id'];
require('db_con.php');
$query     = "SELECT * FROM `person` WHERE person.id='$id'";
$result    = mysqli_query($conn, $query);
$row       = mysqli_fetch_assoc($result);
$firstname = $row['fname'];
$lastname  = $row['lname'];
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FlexFlow</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\flexflow.css?d=<?php
echo time();
?>">
    <style>
        body {
            background-image: url('assets/flexflow3.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: 120% -140%;
        }

        .ctn {
            padding-left: 10px;
            padding: 60px;
        }

        form {
            margin-left: 5px;
            margin-right: 50px;
        }

        td {
            font-size: 25px;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <center><img class="logo" src="assets\flexflow.png"></center>
        </div>
        <div class="hamb">
            <ul class="menu-li">
                <a href="new_data.php" class="tpc">
                    <li>Create New Data</li>
                </a><br>
                <a href="read_data.php" class="tpc">
                    <li>View Existing Data</li>
                </a><br>
                <a href="https://sdgs.un.org/goals/goal3" target="_blank" class="tpc">
                    <li><img class="sdg_small" src="assets\sdg3.png"><br>Learn More</li>
                </a><br>
            </ul>
        </div>
        <button class="menu-bt">☰</button>
    </header>

    <form action="db_dml.php?id=<?php
echo $id;
?>" method="POST">
        <h2>Delete Data?</h2>
        <table class="card ctn">
            <tr>
                <td>Are you sure you want to <b>permanently</b> delete the data
                    of <?php
echo $firstname;
?> <?php
echo $lastname;
?>?</td>
            </tr>
            <tr>
                <td></td>
                <td><button type="reset" onclick="history.back()">Cancel</button></td>
                <td><button type="submit" name="del">Delete</button></td>
            </tr>
        </table>
    </form>
    <script src="assets\menu_button.js"></script>
</body>
</html>