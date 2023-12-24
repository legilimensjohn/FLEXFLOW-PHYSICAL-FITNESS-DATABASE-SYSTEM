<?php
$id = $_GET['id'];
require('db_con.php');
$query = "SELECT * FROM `person` 
JOIN `body_composition` ON person.id=body_composition.person_id
JOIN `aerobic_fitness` ON person.id=aerobic_fitness.person_id
JOIN `muscular_fitness` ON person.id=muscular_fitness.person_id
WHERE person.id='$id'";
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
    <link rel="stylesheet" type="text/css" href="assets\flexflow.css?d=<?php echo time(); ?>">
    <style>
        body {
            background-image: url('assets/flexflow1.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: -25% 0%;
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
    <?php
    $row = mysqli_fetch_assoc($result);
    $firstname = $row['fname'];
    $lastname = $row['lname'];
    $gender = $row['gender'];
    $age = $row['age'];
    $height = $row['height'];
    $weight = $row['weight'];
    $waistline = $row['waistline'];
    $bpm_rest = $row['bpm_rest'];
    $jog_time = $row['jog_time'];
    $situp_reps = $row['situp_reps'];
    $pushup_reps = $row['pushup_reps'];
    $sit_reach = $row['sit_reach'];
    ?>
    <form action="db_dml.php?id=<?php echo $id ?>" method="POST">
        <h2>Update User Data</h2>
        <table class="card ctn">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" required value="<?php echo $firstname ?>"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" required value="<?php echo $lastname ?>"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age" required value="<?php echo $age ?>" min="6" step="1"></td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td><select name="gender" required>
                        <option <?php if ($gender == "M") echo "selected" ?> value="M">Male</option>
                        <option <?php if ($gender == "F") echo "selected" ?> value="F">Female</option>
                </td>
            </tr>

        </table>
        <table class="card ctn">
            <h3>Body Composition</h3>
            <tr>
                <td>Height:</td>
                <td><input type="number" name="height" required value="<?php echo $height ?>" min="0.50" max="9.99" value="1.60" step=".01"> meters</td>
            </tr>
            <tr>
                <td>Weight:</td>
                <td><input type="number" name="weight" required value="<?php echo $weight ?>" min="0.50" max="999.99" value="50.00" step=".01"> kilograms</td>
            </tr>
            <tr>
                <td>Waist Circumference: </td>
                <td><input type="number" name="waistline" required value="<?php echo $waistline ?>" min="30" max="999.99" value="85.00" step=".01"> centimeters</td>
            </tr>
        </table>
        <table class="card ctn">
            <h3>Aerobic Fitness</h3>
            <tr>
                <td>Heart Rate at Rest:</td>
                <td><input type="number" name="bpm_rest" required value="<?php echo $bpm_rest ?>" min="25" value="65" step="1"> beats per minute</td>
            </tr>
            <tr>
                <td>2.4-km Running/Jogging Test:</td>
                <td><input type="number" name="jog_time" required value="<?php echo $jog_time ?>" min="5.00" max="999.99" value="16.00" step=".01"> minutes</td>
            </tr>
        </table>
        <table class="card ctn">
            <h3>Muscular Fitness</h3>
            <tr>
                <td>Sit-up Repititions:</td>
                <td><input type="number" name="situp_reps" required value="<?php echo $situp_reps ?>" min="1" value="20" step="1"></td>
            </tr>
            <tr>
                <td>Push-up Repititions:</td>
                <td><input type="number" name="pushup_reps" required value="<?php echo $pushup_reps ?>" min="1" value="20" step="1"></td>
            </tr>
            <tr>
                <td>Sit and Reach Length: </td>
                <td><input type="number" name="sit_reach" required value="<?php echo $sit_reach ?>" min="0" max="999.99" value="20.00" step=".01"> centimeters</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="reset" onclick="history.back()">Cancel</button>
                    <button type="reset" id="rst">Reset</button>
                </td>
                <td><button type="submit" name="edit">Update</button></td>
            </tr>
        </table>
    </form>

    <script src="assets\menu_button.js"></script>
    <script>
        const resetbutton = document.getElementById("rst");

        resetbutton.addEventListener('click', function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
</body>

</html>