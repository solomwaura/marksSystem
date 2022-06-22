<?php include('session.php'); ?>
<?php include('base.php'); ?>
<body>
    <h3>DashBoard</h3>
    
    <div class="content">
        <div class="col">
            <h4>Select Class</h4>
            <ul>
                <li><a href="verification.php">Class 1</a></li>
                <li><a href="verification.php">Class 2</a></li>
                <li><a href="verification.php">Class 3</a></li>
                <li><a href="#">Class 4</a></li>
                <li><a href="#">Class 5</a></li>
                <li><a href="#">Class 6</a></li>
                <li><a href="#">Class 7</a></li>
                <li><a href="#">Class 8</a></li>
            </ul>
        </div>
        <div class="col"></div>
        <div class="col">
            <p>Hello, <?php echo $_SESSION['username']; ?></p>
        </div>
    </div>
</body>
</html>