<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP</title>
</head>
<body>
    <?php
        // Create an array of day
        $days = ["Sunday", "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

        $daysFrench = ["Dimanche", "Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi", "Samedi"];
    ?>

    <p>The days of the week in English are : <?php echo $days[0] . ", " . $days[1] . ", " . $days[2] . ", "
               . $days[3] . ", " . $days[4] . ", " . $days[5] . ", " . $days[6] ?></p>
    <p>The days of the week in French are : <?php echo  $daysFrench[0]  . ", " . $daysFrench[1] . ", " . $daysFrench[2] . ", " . $daysFrench[3] 
               . ", " . $daysFrench[4] . ", " . $daysFrench[5] . ", " . $daysFrench[6] ?></p>
    
</body>
</html>
