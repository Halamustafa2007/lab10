<!DOCTYPE html>
<html>
<head>
    <title>Current Date and Time</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eaf4f4; text-align: center; padding-top: 100px; }
        .box { background: white; width: 400px; margin: auto; padding: 30px; border-radius: 10px; }
        h2 { color: #087e8b; }
    </style>
</head>
<body>
<div class="box">
    <h2>Current Date, Time and Day</h2>
    <?php
    date_default_timezone_set("Asia/Kolkata");

    echo "<p><strong>Current Date:</strong> " . date("d-m-Y") . "</p>";
    echo "<p><strong>Current Time:</strong> " . date("h:i:s A") . "</p>";
    echo "<p><strong>Current Day:</strong> " . date("l") . "</p>";
    ?>
</div>
</body>
</html>
