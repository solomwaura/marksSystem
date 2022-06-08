<?php

 include 'conn.php'
 
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="script.js"></script>   
<title>class</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <a href="results.php">Rank List :</a>
        <div class="cont">
        <form onsubmit="return validate()" action="." method="Post">
            <h3>Student Marks</h3>
            <div class="input-group">
            <label>Name :</label>
            <p class="error" ><?php echo $nErr; ?> </p>
            <input type="text" name="name" id="name" pattern="[a-zA-Z\s]+" required>
            </div>
            <div class="input-group">
            <label>Math :</label>
            <p class="error" ><?php echo $mErr; ?> </p>
           
            <input type="number" name="math" id="math" min="0" max="100" pattern="[0-9]{1,}" required>
            </div>
            <div class="input-group">
            <label>English :</label>
            <p class="error" ><?php echo $eErr; ?> </p>
           
            <input type="number" name="english" id="english"  min="0" max="100" required>
            </div>
            <div class="input-group">
            <p class="error" ><?php echo $sErr; ?> </p>
            <label>Science :</label>
          
            <input type="number" name="science" id="science" min="0" max="100" required>
            </div>
            <div class="input-group">
            <label>Technology Science :</label>
            <p class="error" ><?php echo $tsErr; ?> </p>
           
            <input type="number" name="tscience" id="tscience"  min="0" max="100" required>
            </div>
            <div class="input-group">
            <label>Social studies :</label>
            <p class="error" ><?php echo $ssErr; ?> </p>
            
            <input type="number" name="sstudies" id="sstudies"  min="0" max="100" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Clear">
            </div>
        </form>
        </div>
        <div class="cont">
            <div class="results">
                <?php
                include 'fetch.php';

                if ($result->num_rows > 0 ){
                    ?>
                    <h3>Last Added Student</h3>
                    <table>
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Math</td>
                        <td>English</td>
                        <td>Science</td>
                        <td>Tscience</td>
                        <td>SStudies</td>
                        <td>Total</td>
                    </tr>
                    </thead>
                    <?php
                    while($row = $result->fetch_array()){
                        $mt = $row['math'];
                        $en = $row['english'];
                        $sc = $row['science'];
                        $ts = $row['t_science'];
                        $ss = $row['s_studies'];

                        $total = $mt+$en+$sc+$ts+$ss;

                    
                        
                    
                    ?>  
                    <tbody>
                    
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['math']; ?></td>
                            <td><?php echo $row['english']; ?></td>
                            <td><?php echo $row['science']; ?></td>
                            <td><?php echo $row['t_science']; ?></td>
                            <td><?php echo $row['s_studies']; ?></td>
                            <td><?php echo $total ?></td>
                            
                        </tr>
                <?php
                    } ?>
                    </tbody>
                    </table>
                    
                

                <?php
                    
                        
                    
                    
                }

                ?>
            </div>
        </div>
        <script>
            function validate() {
                var mth = document.getElementById("math").value;
                var sc = document.getElementById("science").value;
                var eng = document.getElementById("english").value;
                var ts = document.getElementById("tscience").value;
                var ss = document.getElementById("sstudies").value;

                if (mth.length => 3 || sc.length => 3 || eng.length => 3 || ts.length => 3 || ss.length => 3){
                    alert("Invalid score");
            }
    }
        </script>
    </div>
</body>
</html>

