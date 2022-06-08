
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>class</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
    <a href="results.php">Back</a>
    <h3>Updating data : </h3>
    <div class="content">
        <div class="cont">
      
        </div>
        <div class="cont">
            <div class="results">
                <?php
                include 'fetch.php';

                if ($results->num_rows > 0 ){
                    ?>
                    
                  
                    <?php
                    while($row = $results->fetch_array()){
                        $mt = $row['math'];
                        $en = $row['english'];
                        $sc = $row['science'];
                        $ts = $row['t_science'];
                        $ss = $row['s_studies'];
                        $total = $row['total'];

                        // $total = $mt+$en+$sc+$ts+$ss;

                        
                    ?>    
                <h3>Updating data for ID :  <?php echo $row['id']; ?></h3>
            <form action="updatescript.php" method="post">
                <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
                <label>Name :</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" pattern="[a-zA-Z\s]+" required>
                <label>Math :</label>
                <input type="text" name="math" value="<?php echo $row['math']; ?>" min="0" max="100" required>
                <label>English :</label>
                <input type="text" name="english" value="<?php echo $row['english']; ?>" min="0" max="100" required>
                <label>Science :</label>
                <input type="text" name="science" value="<?php echo $row['science']; ?>" min="0" max="100" required>
                <label>Technology Science :</label>
                <input type="text" name="tscience" value="<?php echo $row['t_science']; ?>" min="0" max="100" required>
                <label>Social Studies :</label>
                <input type="text" name="sstudies" value="<?php echo $row['s_studies']; ?>" min="0" max="100" required>
                <input type="submit" value="Updating" name="updating">
            </form>

                    
            
          
                <?php
                    
                    } 
                ?>
                  
                   
                    
            

                <?php
                    
                        
                    
                    
                }

                ?>
            </div>
              
        </div>
        
    </div>

</body>
</html>

