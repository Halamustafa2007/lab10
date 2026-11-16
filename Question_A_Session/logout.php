<?php
session_start();

if (!isset($_SESSION["name"], $_SESSION["start_time"])) {
    header("Location: index.php");
    exit();
}

$name = $_SESSION["name"];
$startTime = $_SESSION["start_time"];
$duration = max(0, time() - $startTime);

$hours = floor($duration / 3600);
$minutes = floor(($duration % 3600) / 60);
$seconds = $duration % 60;

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout Page</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eaf4f4; text-align: center; padding-top: 100px; }
        .box { background: white; width: 420px; margin: auto; padding: 30px; border-radius: 10px; }
        a { color: #087e8b; }
    </style>
</head>
<body>
<div class="box">
    <h2>Thank You, <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>!</h2>
    <p>You have successfully logged out.</p>
    <h3>Your Usage Duration</h3>
    <p><?php echo $hours . " hours, " . $minutes . " minutes and " . $seconds . " seconds"; ?></p>
    <a href="index.php">Login Again</a>
</div>
</body>
</html>
