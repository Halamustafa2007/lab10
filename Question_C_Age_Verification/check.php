<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html");
    exit();
}

$name = trim($_POST["username"] ?? "");
$ageInput = $_POST["age"] ?? "";

if ($name === "" || filter_var($ageInput, FILTER_VALIDATE_INT) === false || (int)$ageInput < 0) {
    header("Location: index.html");
    exit();
}

$name = htmlspecialchars($name, ENT_QUOTES, "UTF-8");
$age = (int)$ageInput;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Verification Result</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eaf4f4; text-align: center; padding-top: 100px; }
        .box { background: white; width: 450px; max-width: 85%; margin: auto; padding: 30px; border-radius: 10px; }
        a { color: #087e8b; }
    </style>
</head>
<body>
<div class="box">
    <?php if ($age < 18): ?>
        <h2>Hello, <?php echo $name; ?>, you are not authorized to visit the site.</h2>
    <?php else: ?>
        <h2>Welcome to this site, <?php echo $name; ?>!</h2>
    <?php endif; ?>
    <br>
    <a href="index.html">Go Back</a>
</div>
</body>
</html>
