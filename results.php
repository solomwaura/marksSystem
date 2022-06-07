<?php

 include 'conn.php'
 
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>class</title>
<link rel="stylesheet" href="style.css">
<style>
    .update{
        text-decoration: none;
        padding: 5px;
        background-color: green;
        color:white;
        border-radius: 10px;
    }
    .delete {
    text-decoration: none;
    padding: 5px;
    color:white;
    background-color: red;
    border-radius: 10px;
    }
    table tr{
        padding:10px;
        margin:10px;
    }
</style>
</head>
<body>
    <a href="index.php">Home</a>
    <h3>Rank List </h3>
    <div class="content">
        <div class="cont">
      
        </div>
        <div class="cont">
            <div class="results">
                <?php
                include 'rank.php';

                if ($result->num_rows > 0 ){
                    ?>
                    <h3>Class List Results</h3>
                    <p><button onclick="sortTotal()">Sort</button></p>
                    <table id="table" >
                   
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Math</th>
                        <th>English</th>
                        <th>Science</th>
                        <th>Technology science</th>
                        <th>Social Studies</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                  
                    <?php
                    while($row = $result->fetch_array()){
                        $mt = $row['math'];
                        $en = $row['english'];
                        $sc = $row['science'];
                        $ts = $row['t_science'];
                        $ss = $row['s_studies'];

                        $total = $mt+$en+$sc+$ts+$ss;

                    
                        
                    
                    ?>  
                    
                    
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['math']; ?></td>
                            <td><?php echo $row['english']; ?></td>
                            <td><?php echo $row['science']; ?></td>
                            <td><?php echo $row['t_science']; ?></td>
                            <td><?php echo $row['s_studies']; ?></td>
                            <td><?php echo $total ?></td>
                            <td padding="5px">
            <form action="update.php" method="post">
                <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
                <input type="submit" value="Update">
            </form>
             <!-- <a href="update.php?id=<?php echo $row['id'] ?>" name="update" class="update" style>Update </a> &nbsp;&nbsp; -->
             <!-- <a href="results.php?id=<?php echo $row['id'] ?>" class="delete"> Delete </a> -->
             
         </td>
                            
                        </tr>
                <?php
                // include 'fetch.php';
                    } ?>
                  
                    </table>
                    
                

                <?php
                    
                        
                    
                    
                }

                ?>
            </div>
                <?php 
                    $script = file_get_contents('script.js');
                    echo "<script>" .$script."</script>"
                ?>
        </div>
        
    </div>

</body>
</html>

