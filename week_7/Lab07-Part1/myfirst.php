<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP</title>
</head>
<body>
    <?php
        // Create an array of marks
        $marks = [85, 85, 95];

        // Change the second mark to 90
        $marks[1] = 90;

        // Calculate the average
        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;

        // Check the result
        if ($ave >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }
    ?>

    <p>Average: <?php echo $ave; ?></p>
    <p>Status: <?php echo $status; ?></p>
</body>
</html>
