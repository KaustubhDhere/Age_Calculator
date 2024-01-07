<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Age Calculator</title>
</head>

<body>
    <h1>AGE CALCULATOR</h1>

    <div class="container">
        <form method="post" action="">
            <?php
            $currentDateTime = '';
            $years = '';
            $months = '';
            $days = '';
            $hours = '';
            $minutes = '';
            $seconds = '';
            if (isset($_POST['submit'])) {
                // Get the user's input
                $birthdate = $_POST['birthdate'];

                // Calculate age
                $birthDateTime = new DateTime($birthdate);

                // Initialize the current date and time
                $currentDateTime = new DateTime();


                // Calculate the difference between two dates
                $ageInterval = $currentDateTime->diff($birthDateTime);

                // Extract individual components
                $years = $ageInterval->y;
                $months = $ageInterval->m;
                $days = $ageInterval->d;
                $hours = $ageInterval->h;
                $minutes = $ageInterval->i;
                $seconds = $ageInterval->s;

                // Display the age components
                echo "Your age is approximately $years years, $months months, $days days, $hours hours, $minutes minutes, and $seconds seconds.";
                echo "<br>";
            }
            ?>

            <div class="container">
                <div class="form-group">
                    <label for="" class="mb-3">Please enter your date of birth:</label>
                    <input type="date" name="birthdate" class="form-control">
                </div>
                <button type="submit" name="submit" class="mt-3 button">Calculate Age</button>
            </div>
            <div class="main">
                <div class="text-center text-white"><b>Your Current Age is </b></div>
                <div class="age text-center"><span>Years</span><?php echo $years ?></div>
                <div class="age text-center"><span>Month</span><?php echo $months ?></div>
                <div class="age text-center"><span>Days</span><?php echo $days ?></div>
                <div class="age text-center"><span>Hours</span><?php echo $hours ?></div>
                <div class="age text-center"><span>Minutes</span><?php echo $minutes ?></div>
                <div class="age text-center"><span>Seconds</span><?php echo $seconds ?></div>
            </div>

        </form>
    </div>

</body>

</html>