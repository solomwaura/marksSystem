
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Panel</a>
    <?php 

        require('db.php');

        session_start();

        if(isset($_POST['login'])){
            $username = $_POST['user'];
            $password = $_POST['pass'];

            // check if user exists

            $query = "SELECT * FROM teachers WHERE name='$username' AND password='$password'";

            $result = mysqli_query($conn,$query) or die('could not connect:');
            $rows = mysqli_num_rows($result);

            if($rows == 1) {
                $_SESSION['username'] = $username;

                //redirect to dashboard

                header('location: index.php');
            } else{
                echo "<div class='form'>
                      <h3>Incorrect username/password.</h3><br>
                      <p class='link'> click here to<a href='login.php'>Login</a> again</p>
                      </div>";
                
            }

        } else{
    ?>
        <div class="content">
            <div class="form">
                <h3>Enter your login Details</h3>
            </div>
            <div class="form">
                <h3>Staff Login</h3>
                <form action="login.php" method="post">
                    <label>Username :</label>
                    <input type="text" name="user" id="usr">
                    <label>Password :</label>
                    <input type="password" name="pass" id="psd">
                    <br>
                    <input type="submit" value="Login" name="login">

                    
                </form>
            </div>
            <div class="form"></div>
        </div>
        <?php
        }
        ?>
</body>
</html>