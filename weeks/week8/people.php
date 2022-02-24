<?php
include('config.php');
include('./includes/header.php');

?>
    <main class="people">
        <h1>Welcome to my people page</h1>
        <?php
        //select from people table and assign to var
        $sql = 'SELECT * FROM people';
        //connect to db from cradentials set in config file
        $iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        $result =  mysqli_query($iConn,$sql);

        // if num of rows is greater than 0, we can see the tables...
        if(mysqli_num_rows($result) > 0) {
            //think about our one row being an array -- associative array $row['first_name']
            
            while($row = mysqli_fetch_assoc($result)) {
                
                echo'
                <h2>Information about '.$row['first_name'].'</h2>
                <ul>
                    <li><b>First Name:</b> '.$row['first_name'].'</li>
                    <li><b>Last Name:</b> '.$row['last_name'].'</li>
                    <li><b>Email:</b> '.$row['email'].'</li>
                    <li><b>Birth Year:</b> '.$row['birthday'].'</li>
                    <li><b>Occupation:</b> '.$row['occupation'].'</li>
                </ul>
                <p>'.$row['details'].'</p>
                ';

            }// close while loop

        }//close if statment

        

        ?>

    </main>

    <aside>


    </aside>

</div><!-- End of wrapper -->

<?php
include('./includes/footer.php');

?>
