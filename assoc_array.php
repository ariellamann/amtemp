<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #9fceed;
            color: #fff;
        }
        .hours-container {
            width: 300px;
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #541191;
        }
        .day {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="hours-container">
        <h1>Office Hours</h1>

        <?php
            $office_hours = [
                "Monday" => "9am - 5pm",
                "Tuesday" => "9am - 5pm",
                "Wednesday" => "9am - 5pm",
                "Thursday" => "9am - 5pm",
                "Friday" => "9am - 3pm",
                "Saturday" => "10am - 3pm",
                "Sunday" => "Closed"
            ];

            // Loop through the array and display each day with its hours
            foreach ($office_hours as $day => $hours) {
                echo "<div class='day'>
                        <span>$day</span>
                        <span>$hours</span>
                    </div>";
            }
        ?>
    </div>
</body>
</html>