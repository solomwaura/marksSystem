<?php include ('session.php'); ?>
<?php include('base.php'); ?>
    <body>
        <?php

            require('db.php');
            session_start();

            if(isset($_POST['code'])){

                $user = $_SESSION['username'];
                $code = $_POST['coder'];

                $vsql = "SELECT * FROM teachers WHERE name='$user' AND pass_code='$code'";

                $create = $conn->query($vsql);

                if($create->num_rows > 0){

                    while($row=$create->fetch_array()){
                        $class = $row['class'];

                        $_SESSION['class']= $class;
                    }
                }

                $result = $conn->query($vsql);

                $row= mysqli_num_rows($result);

                if($row == 1){
                    $_SESSION['user'] = $user;

                    //redirect to inputting marks page

                    header('location:marks.php');
                } else{
                    echo "<div class='error'>
                             <h3 class='error'>Incorrect Pass Code</h3>
                             <p>Please, select your<a href='verification.php'> assigned Class.</a></p>
                          </div>";
                }


            } else{
        ?>
        <div class="content">
            <div class="verification">
                <p>welcome, <?php echo $_SESSION['username']; ?></p>
            </div>
            <div class="verification">
                <h2>Enter The Authentication Code</h2>
                <form action="verification.php" method="post">
                    <label>Enter the Verification code :</label>
                    <input type="password" name="coder" id="code" require placeholder="Enter your verification code">
                    <input type="submit" value="Submit" name="code">
                </form>
            </div>
            <div class="verification"></div>
        </div>
        <?php
            }
            ?>
    </body>
</html>