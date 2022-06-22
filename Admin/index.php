<?php include 'conn.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="admin"></div>
        <div class="admin">
            <h3>Enter Admin Credentials</h3>
            <form action="." method="post">
                <label>Username </label>
                <input type="text" name="admin-name" id="admin-name" required placeholder="Username">
                <label>Password </label>
                <input type="password" name="admin-pass" id="admin-pass" required placeholder="Password">
                <input type="submit" value="Login" name="login">
                
            </form>
        </div>
        <div class="admin"></div>
    </div>
</body>
</html>