<?php
require('db_con.php');

$query = "SELECT *,
    CAST(`weight`/(`height`*`height`) AS DECIMAL(5,2)) AS `bmi`
    FROM `person` 
    JOIN `body_composition` ON person.id=body_composition.person_id
    JOIN `aerobic_fitness` ON person.id=aerobic_fitness.person_id
    JOIN `muscular_fitness` ON person.id=muscular_fitness.person_id";

$result = mysqli_query($conn, $query);
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


    <div class="container">
        <h2>View User Data</h2>
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5 cardtbl">
                    <table class="table table-bordered tbfx">
                        <tr class="trfx">
                            <td> </td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Sex</td>
                            <td>Age</td>
                            <td>Height (m)</td>
                            <td>Weight (kg)</td>
                            <td>Body Mass Index (kg/m<sup>2</sup>)</td>
                            <td>Waist Circumference (cm)</td>
                            <td>Heart Rate at Rest (bpm)</td>
                            <td>2.4 km Running/Jogging Time (mins)</td>
                            <td>Sit-up Reps</td>
                            <td>Push-up Reps</td>
                            <td>Sit and Reach (cm)</td>
                        </tr>
                        <?php
while ($row = mysqli_fetch_assoc($result)) {
    $firstname   = $row['fname'];
    $lastname    = $row['lname'];
    $gender      = $row['gender'];
    $age         = $row['age'];
    $height      = $row['height'];
    $weight      = $row['weight'];
    $bmi         = $row['bmi'];
    $waistline   = $row['waistline'];
    $bpm_rest    = $row['bpm_rest'];
    $jog_time    = $row['jog_time'];
    $situp_reps  = $row['situp_reps'];
    $pushup_reps = $row['pushup_reps'];
    $sit_reach   = $row['sit_reach'];
    $id          = $row['id'];
?>
                           <tr>
                                <td>
                                    <div class="rud">
                                        <a href="review_data.php?id=<?php
    echo $id;
?>" class="btn btn-pencil">View</a>
                                        <a href="edit_data.php?id=<?php
    echo $id;
?>" class="btn btn-pencil">Edit</a>
                                        <a href="delete_data.php?id=<?php
    echo $id;
?> " class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                                <td><?php
    echo $firstname;
?></td>
                                <td><?php
    echo $lastname;
?></td>
                                <td><?php
    echo $gender;
?></td>
                                <td><?php
    echo $age;
?></td>
                                <td><?php
    echo $height;
?></td>
                                <td><?php
    echo $weight;
?></td>
                                <td><?php
    echo $bmi;
?></td>
                                <td><?php
    echo $waistline;
?></td>
                                <td><?php
    echo $bpm_rest;
?></td>
                                <td><?php
    echo $jog_time;
?></td>
                                <td><?php
    echo $situp_reps;
?></td>
                                <td><?php
    echo $pushup_reps;
?></td>
                                <td><?php
    echo $sit_reach;
?></td>
                            </tr>
                        <?php
}
?>
                   </table>
                </div>
            </div>
        </div>
    </div>
    <script src="assets\menu_button.js"></script>
</body>

</html>