<?php

if (isset($_POST['edit']) || isset($_POST['del']))
    $id = $_GET['id'];
require "db_con.php";

if (isset($_POST['save']) || isset($_POST['edit']) || isset($_POST['del'])) {
    if (isset($_POST['save']) || isset($_POST['edit'])) {
        $firstname   = $_POST['fname'];
        $lastname    = $_POST['lname'];
        $gender      = $_POST['gender'];
        $age         = $_POST['age'];
        $height      = $_POST['height'];
        $weight      = $_POST['weight'];
        $waistline   = $_POST['waistline'];
        $bpm_rest    = $_POST['bpm_rest'];
        $jog_time    = $_POST['jog_time'];
        $situp_reps  = $_POST['situp_reps'];
        $pushup_reps = $_POST['pushup_reps'];
        $sit_reach   = $_POST['sit_reach'];
    }
    
    if (isset($_POST['del'])) {
        $query       = "SELECT * FROM `person` 
            JOIN `body_composition` ON person.id=body_composition.person_id
            JOIN `aerobic_fitness` ON person.id=aerobic_fitness.person_id
            JOIN `muscular_fitness` ON person.id=muscular_fitness.person_id
             WHERE person.id='$id'";
        $retrv       = mysqli_query($conn, $query);
        $row         = mysqli_fetch_assoc($retrv);
        $firstname   = $row['fname'];
        $lastname    = $row['lname'];
        $gender      = $row['gender'];
        $age         = $row['age'];
        $height      = $row['height'];
        $weight      = $row['weight'];
        $waistline   = $row['waistline'];
        $bpm_rest    = $row['bpm_rest'];
        $jog_time    = $row['jog_time'];
        $situp_reps  = $row['situp_reps'];
        $pushup_reps = $row['pushup_reps'];
        $sit_reach   = $row['sit_reach'];
    }
    
    if (isset($_POST['save']))
        $sql1 = "INSERT INTO `person`(`fname`, `lname`, `gender`, `age`)
            VALUES('$firstname', '$lastname', '$gender', '$age')";
    
    else if (isset($_POST['edit']))
        $sql1 = "UPDATE `person` SET `fname`='$firstname', `lname`='$lastname', `gender`='$gender', `age`='$age'
            WHERE `id`='$id'";
    
    else if (isset($_POST['del']))
        $sql1 = "DELETE FROM `body_composition` WHERE `person_id`='$id'";
    
    $result1 = $conn->query($sql1);
    
    if ($result1) {
        if (isset($_POST['save'])) {
            $id = $conn->insert_id;
            
            $sql2 = "INSERT INTO `body_composition`(`person_id`, `height`, `weight`, `waistline`)
                VALUES('$id', '$height', '$weight', '$waistline')";
            
            $sql3 = "INSERT INTO `aerobic_fitness`(`person_id`, `bpm_rest`, `jog_time`)
                VALUES('$id', '$bpm_rest', '$jog_time')";
            
            $sql4 = "INSERT INTO `muscular_fitness`(`person_id`, `situp_reps`, `pushup_reps`, `sit_reach`)
                VALUES('$id', '$situp_reps', '$pushup_reps', '$sit_reach')";
        } else if (isset($_POST['edit'])) {
            $sql2 = "UPDATE `body_composition` SET `height`='$height', `weight`='$weight', `waistline`='$waistline'
                WHERE `person_id`='$id'";
            
            $sql3 = "UPDATE `aerobic_fitness` SET `bpm_rest`='$bpm_rest', `jog_time`='$jog_time'
                WHERE `person_id`='$id'";
            
            $sql4 = "UPDATE `muscular_fitness` SET `situp_reps`='$situp_reps', `pushup_reps`='$pushup_reps', `sit_reach`='$sit_reach'
                WHERE `person_id`='$id'";
        } else if (isset($_POST['del'])) {
            $sql2 = "DELETE FROM `aerobic_fitness` WHERE `person_id`='$id'";
            $sql3 = "DELETE FROM `muscular_fitness` WHERE `person_id`='$id'";
            $sql4 = "DELETE FROM `person` WHERE `id`='$id'";
        }
        
        $result2 = $conn->query($sql2);
        $result3 = $conn->query($sql3);
        $result4 = $conn->query($sql4);
        
        if ($result2 && $result3 && $result4) {
            if (isset($_POST['edit']) || isset($_POST['save']))
                require "review_data.php";
            else
                require "read_data.php";
        } else {
            echo "Error:" . $sql2 . "<br>" . $conn->error;
        }
    } else {
        echo "Error:" . $sql1 . "<br>" . $conn->error;
    }
    
    $conn->close();
}