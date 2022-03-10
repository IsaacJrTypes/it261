<?php 
include('config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

$sql = 'SELECT * FROM philosophers WHERE philo_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result =  mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    //before we copy and past our while loops, we cannot output anything here
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $era = $row['era'];
            $quote = $row['quote'];
            $image_path = $row['image_path'];
            $bio = $row['bio'];

            $feedback = '';
    
        }//close while loop
    } else { //close if mysqli_num_rows
            $feedback= 'Error, we have a problem!';
    }

include('./includes/header.php');
?>

<div id="wrapper">
    <main class="philo-main">
        <h1>Welcome to <?=$name?>'s page</h1>
    <div class="philo-content">
        <ul>
        <?php
            echo '
            <li><b>Name:</b> '.$name.'</li>
            <li><b>Timeline:</b> '.$era.'</li>
            <li><b>Quote:</b> <em>“'.$quote.'”</em></li>
            
            
            ';
            ?>
        </ul>
        <?php
        echo '
        <p> '.$bio.'</p>
        ';
        ?>
        <p>Content sourced from wikipedia</p>
        <p><a href="./people.php">Return to the people.php page</a></p>
    </div><!-- philo content end -->
    </main>

    <aside class="philo-aside">
        <h2>How <?=$name?> looked like</h2>
        <img src="./images/<?=$image_path?>" alt="Image of <?=$name?>">
           
    </aside>

</div><!-- End of wrapper -->

<?php
include('./includes/footer.php');

?>