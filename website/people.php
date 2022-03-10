<?php
include('config.php');
include('includes/header.php');
/*
how we created our table:
CREATE TABLE philosophers (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
era VARCHAR(30) NOT NULL,
quote VARCHAR(255) NOT NULL,
image_path VARCHAR(255),
bio longtext
)
CHARACTER SET utf8mb4  COLLATE utf8mb4_unicode_ci;

*/
?>
<div id="wrapper">
    
    <main class="index">
        <h1>Welcome to my database on philosophers</h1>

        <table>
        <tr>
            <th>Philosophers</th>
            <th>Timeline</th>
            <th>Background Information</th>
        </tr>

        <?php
        
        $sql = 'SELECT * FROM philosophers';
       
        $iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
        
        $result =  mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        if(mysqli_num_rows($result) > 0) {
            //-- associative array $row
            
            while($row = mysqli_fetch_assoc($result)) {
                
                echo'
                <tr>
                    <td><b>'.$row['name'].'</b></td>
                    <td>'.$row['era'].'</td>
                    <td><p>For more information about '.$row['name'].' <br>Click <a href="people-view.php?id='. $row['philo_id'] .'" >here</a></p></td>
                </tr>
                ';

            }// close while loop

        }//close if statment

        ?>

        </table>
    </main>
</div><!-- End wrapper -->

<?php

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

include('includes/footer.php')
?>