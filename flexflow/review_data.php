<?php
if (isset($_GET['id'])) $id = $_GET['id'];
require('db_con.php');

$query = "SELECT *,
    CAST(`weight`/(`height`*`height`) AS DECIMAL(5,2)) AS `bmi`
    FROM `person` 
    JOIN `body_composition` ON person.id=body_composition.person_id
    JOIN `aerobic_fitness` ON person.id=aerobic_fitness.person_id
    JOIN `muscular_fitness` ON person.id=muscular_fitness.person_id
    WHERE person.id='$id'";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$firstname = $row['fname'];
$lastname = $row['lname'];
$gender = $row['gender'];
$age = $row['age'];
$height = $row['height'];
$weight = $row['weight'];
$bmi = $row['bmi'];
$waistline = $row['waistline'];
$bpm_rest = $row['bpm_rest'];
$jog_time = $row['jog_time'];
$situp_reps = $row['situp_reps'];
$pushup_reps = $row['pushup_reps'];
$sit_reach = $row['sit_reach'];
$id = $row['id'];
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
            background-image: url('assets/flexflow2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: -25% -80%;
        }

        .logo {
            width: 50%;
        }

        .ctn {
            padding-left: 10%;
        }

        td {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <header>
        <center>
            <div class="headercont">
                <div class="hdrcol"><img class="logo" src="assets\flexflow.png"></div>
                <div class="hdrcol">
                    <h4>Sustainable Development Goal 3 <img class="sdg" src="assets\sdg3.png"></h4>
                </div>
            </div>
        </center>

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

    <form action="read_data.php">
        <h2><?php echo $firstname ?> <?php echo $lastname ?> Fitness Assesment</h2>
        <table class="card ctn yllw">
            <tr>
                <td class="fit"> Assesment on the physical fitness of
                    <b><?php echo $firstname ?> <?php echo $lastname ?></b>
                    <br><br>Age: <b><?php echo $age ?></b><br>Sex:<b>
                        <?php if ($gender == "M") echo "Male";
                        else if ($gender == "F") echo "Female" ?>
                    </b>
                </td>
                <td></td>
                <td class="hglight1">
                    <p id="age_info"></p>
                    <p id="bmi_info"></p>
                </td>
            <tr>
        </table>
        <table class="card ctn">
            <h3><?php echo $firstname ?> - Body Composition</h3>
            <tr>
                <td class="fit">Height: <b><?php echo $height ?> m</b>
                    <br>Weight: <b><?php echo $weight ?> kg</b><br>
                    <br>Waist Circumference: <b><?php echo $waistline ?> cm</b>
                </td>
                <td></td>
                <td class="hglight2">Body Mass Index: <b><?php echo $bmi ?> kg/m<sup>2</sup></b>
                    <br>BMI Class: <b id="bmi"></b>
                    <br><br>Rating: <b id="waistline"></b>
                </td>
            </tr>
        </table>
        <table class="card ctn">
            <h3><?php echo $firstname ?> - Aerobic Fitness</h3>
            <tr>
                <td class="fit">Heart Rate at Rest: <b><?php echo $bpm_rest ?> bpm</b>
                    <br><br>2.4-km Jog Test: <b><?php echo $jog_time ?> min</b>
                </td>
                <td></td>
                <td class="hglight2">Rating: <b id="bpm_rest"></b>
                    <br><br>Rating: <b id="jog_time"></b>
                </td>
            </tr>
        </table>
        <table class="card ctn">
            <h3><?php echo $firstname ?> - Muscular Fitness</h3>
            <tr>
                <td class="fit">Sit-up Repititions: <b><?php echo $situp_reps ?></b>
                    <br><br>Push-up Repititions: <b><?php echo $pushup_reps ?></b>
                    <br><br>Sit and Reach: <b><?php echo $sit_reach ?> cm</b>
                </td>
                <td></td>
                <td class="hglight2">Rating: <b id="situp_reps"></b>
                    <br><br>Rating: <b id="pushup_reps"></b>
                    <br><br>Rating: <b id="sit_reach"></b>
                </td>
            </tr>
        </table>
        <table class="nocol">
            <tr>
                <td class="fit"></td>
                <td><button type="submit">Return</button></td>
            </tr>
        </table>
    </form>

    <script src="assets\menu_button.js"></script>
    <script>
        let bmi = "<?php print($bmi); ?>";
        let age = "<?php print($age); ?>";
        let gender = "<?php print($gender); ?>";
        let waistline = "<?php print($waistline); ?>";
        let bpm_rest = "<?php print($bpm_rest); ?>";
        let jog_time = "<?php print($jog_time); ?>";
        let situp_reps = "<?php print($situp_reps); ?>";
        let pushup_reps = "<?php print($pushup_reps); ?>";
        let sit_reach = "<?php print($sit_reach); ?>";
    </script>
    <script src="assets\review_data.js"></script>
</body>

</html>