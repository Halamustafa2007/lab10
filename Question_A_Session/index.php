<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eaf4f4; text-align: center; padding-top: 100px; }
        .box { background: white; width: 350px; margin: auto; padding: 30px; border-radius: 10px; }
        input, button { padding: 10px; margin: 10px; }
        button { background: #087e8b; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
<div class="box">
    <h2>Welcome to Our Website</h2>
    <form action="welcome.php" method="post">
        <input type="text" name="username" placeholder="Enter your name" required>
        <br>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
