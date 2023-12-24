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

        .logo {
            width: 50%;
        }
    </style>
</head>

<body>
    <header>
        <center>
            <div class="headercont">
                <div class="hdrcol"><img class="logo" src="assets\flexflow.png"></div>
                <div class="hdrcol">
                    <h4>Turn Inactivity into Action,<br> for a Sustainable Future</h4>
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

    <form action="db_dml.php" method="POST">
        <h2>New User Data</h2>
        <table class="card ctn">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" required></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" required></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age" required min="1" step="1"></td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td><select name="gender" required>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                </td>
            </tr>

        </table>
        <table class="card ctn">
            <h3>Body Composition</h3>
            <tr>
                <td>Height:</td>
                <td><input type="number" name="height" required min="0.50" max="9.99" value="1.60" step=".01"> meters</td>
            </tr>
            <tr>
                <td>Weight:</td>
                <td><input type="number" name="weight" required min="0.50" max="999.99" value="50.00" step=".01"> kilograms</td>
            </tr>
            <tr>
                <td>Waist Circumference: </td>
                <td><input type="number" name="waistline" required min="30" max="999.99" value="85.00" step=".01"> centimeters</td>
            </tr>
        </table>
        <table class="card ctn">
            <h3>Aerobic Fitness</h3>
            <tr>
                <td>Heart Rate at Rest:</td>
                <td><input type="number" name="bpm_rest" required min="25" value="65" step="1"> beats per minute</td>
            </tr>
            <tr>
                <td>2.4-km Running/Jogging Test:</td>
                <td><input type="number" name="jog_time" required min="5.00" max="999.99" value="16.00" step=".01"> minutes</td>
            </tr>
        </table>
        <table class="card ctn">
            <h3>Muscular Fitness</h3>
            <tr>
                <td>Sit-up Repititions:</td>
                <td><input type="number" name="situp_reps" required min="1" value="20" step="1"></td>
            </tr>
            <tr>
                <td>Push-up Repititions:</td>
                <td><input type="number" name="pushup_reps" required min="1" value="20" step="1"></td>
            </tr>
            <tr>
                <td>Sit and Reach Length: </td>
                <td><input type="number" name="sit_reach" required min="-99.99" max="999.99" value="20.00" step=".01"> centimeters</td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="save">Submit</button></td>
            </tr>
        </table>
    </form>

    <script src="assets\menu_button.js"></script>
</body>

</html>