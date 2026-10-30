<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    //Checking First name 
        if (empty($_POST['firstname'])) {
            echo "First name is required <br> " ;
        } else {
            echo "First name: " . htmlspecialchars($_POST['firstname']). "<br>";
        }
        
    //Checking Last name 
        if (empty($_POST['lastname'])) {
            echo "Last name is required <br>";
        } else {
            echo "Last name: " . htmlspecialchars($_POST['lastname']) . "<br>";
        }

    //Checking Age 
        if (empty($_POST['age'])) {
            echo "Age is required <br>";
        } elseif (filter_var($_POST['age'], FILTER_VALIDATE_INT) === false) {
            echo " Age must be a valid integer !!! <br>";
        } else {
            echo "Age: " . htmlspecialchars($_POST['age']) . "<br>";
        }

    //Checking Species
       $validSpecies = ['M', 'D', 'E', 'H'];

        if (empty($_POST['species'])) {
            echo "Species is required<br>";
        } elseif (!in_array($_POST['species'], $validSpecies, true)) {
            echo "Invalid species selected<br>";
        } else {
            if ($_POST['species'] == "M") {
                echo "Species: Human <br>";
            } elseif ($_POST['species'] == 'D') {
                echo "Species: Dwarf<br>";
            } elseif ($_POST['species'] == 'E') {
                echo "Species: Elf<br>";
            } else {
                echo "Species: Hobbit<br>";
            }
        }

    //Checking Booking 
    echo "<h2>Your Booking</h2>";
    echo "Booking: ";

    $booking = [];

    if (isset($_POST['accom'])) {
        $booking[] = "Accommodation";
    }

    if (isset($_POST['4day'])) {
        $booking[] = "4 Day Tour";
    }

    if (isset($_POST['10day'])) {
        $booking[] = "10 Day Tour";
    }

    if (!empty($booking)) {
        echo implode(", ", $booking) . "<br>";
    } else {
        echo "No booking selected<br>";
    }
    
    //Cheking food
        $food = $_POST['food'];

        if ($food === 'none') {
            echo "Food preference: None<br>";
        } elseif ($food === 'lembas') {
            echo "Food preference: Lembas<br>";
        } elseif ($food === 'mushrooms') {
            echo "Food preference: Mushrooms<br>";
        } elseif ($food === 'ent') {
            echo "Food preference: Ent Draft<br>";
        } elseif ($food === 'cram') {
            echo "Food preference: Cram<br>";
        } else {
            echo "Invalid food preference<br>";
        }

    //Checking Date
        if (empty($_POST['bookday'])) {
            echo "Booking date is required<br>";
        } else {
            echo "Booking date: " . htmlspecialchars($_POST['bookday']) . "<br>";
        }
    //Checking Number of travellers
        if (empty($_POST['partysize'])) {
            echo "Number of travellers is required<br>";
        } elseif (filter_var($_POST['partysize'], FILTER_VALIDATE_INT) === false) {
            echo "Number of travellers must be a valid integer<br>";
        } else {
            echo "Number of travellers: " . htmlspecialchars($_POST['partysize']) . "<br>";
        }
    ?>
</body>
</html>