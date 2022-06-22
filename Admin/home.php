<?php include 'conn.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="admin">
        <?php if (isset($_SESSION['user'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['user']; 
						// unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
        <?php if (!isset($_SESSION['user'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						header('location: home.php');
					?>
				</h3>
			</div>
		<?php endif ?>
        </div>
        <div class="admin">
            <h3>Register a Teacher</h3>
            <p id="success"> <?php echo $msg; ?></p>
            <form action="." method="post">
               
                <label>Name :</label>
                <input type="text" name="name" required placeholder="Name">
                <label>Password :</label>
                <input type="password" name="pass" required placeholder="password">
                <label>Class :</label>
                <select name="class" required>
                    <option value="">---</option>
                    <option value="class 1">Class 1</option>
                    <option value="class 2">Class 2</option>
                    <option value="class 3">Class 3</option>
                    <option value="class 4">Class 4</option>
                    <option value="class 5">Class 5</option>
                    <option value="class 6">Class 6</option>
                    <option value="class 7">Class 7</option>
                    <option value="class 8">Class 8</option>
                </select>
               
                <label>Pass-Code :</label>
                <input type="password" name="code" required placeholder="pass-code">
                <input type="submit" value="Register" name="register">
            </form>
        </div>
        <div class="admin"></div>
    </div>
</body>
</html>