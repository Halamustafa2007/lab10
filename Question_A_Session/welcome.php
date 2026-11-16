<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["username"] ?? "");
    if ($name === "") {
        header("Location: index.php");
        exit();
    }

    $_SESSION["name"] = $name;
    $_SESSION["start_time"] = time();
}

if (!isset($_SESSION["name"], $_SESSION["start_time"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eaf4f4; text-align: center; padding-top: 80px; }
        .time { position: absolute; top: 20px; right: 25px; font-weight: bold; }
        .box { background: white; width: 400px; margin: auto; padding: 35px; border-radius: 10px; }
        button { background: #087e8b; color: white; padding: 10px 25px; border: none; cursor: pointer; }
    </style>
</head>
<body>
<div class="time">
    Start Time: <?php echo date("h:i:s A", $_SESSION["start_time"]); ?>
</div>
<div class="box">
    <h1>Hello, <?php echo htmlspecialchars($_SESSION["name"], ENT_QUOTES, "UTF-8"); ?>!</h1>
    <p>Welcome to our website.</p>
    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</div>
</body>
</html>
