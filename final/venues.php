<?php
//How we created venues table
/* CREATE TABLE venues (
    venue_id INT(6) AUTO_INCREMENT PRIMARY KEY,
    venue_name VARCHAR(255) NOT NULL,
    neighborhood VARCHAR(255) NOT NULL,
    image_path VARCHAR(255),
    artist_performed Tinytext,
    history longtext
    )
    CHARACTER SET utf8mb4  COLLATE utf8mb4_unicode_ci; */

//index page -> show session_start()
session_start();

include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    
    <main class="index">
        <h1 class="center">List of My favorite Seattle Concert Venues</h1>

        <table>
        <tr>
            <th>Concert Venue</th>
            <th>Location</th>
            <th>Detailed Information</th>
        </tr>

        <?php
        
        $sql = 'SELECT * FROM venues';
       
        $iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
        
        $result =  mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        if(mysqli_num_rows($result) > 0) {
            //-- associative array $row
            
            while($row = mysqli_fetch_assoc($result)) {
                
                echo'
                <tr>
                    <td><b>'.$row['venue_name'].'</b></td>
                    <td>'.$row['neighborhood'].'</td>
                    <td><p>For more information about '.$row['venue_name'].' <br>Click <a href="venue-view.php?id='. $row['venue_id'] .'" >here</a></p></td>
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