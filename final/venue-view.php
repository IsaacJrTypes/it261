<?php 
session_start();
include('config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    header('Location:venues.php');
}

$sql = 'SELECT * FROM venues WHERE venue_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result =  mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    //before we copy and past our while loops, we cannot output anything here
        while($row = mysqli_fetch_assoc($result)) {
            $venue_name = $row['venue_name'];
            $neighborhood = $row['neighborhood'];
            $artist_performed = $row['artist_performed'];
            $image_path = $row['image_path'];
            $history = $row['history'];

            $feedback = '';
    
        }//close while loop
    } else { //close if mysqli_num_rows
            $feedback= 'Error, we have a problem!';
    }

include('./includes/header.php');
?>

<div id="wrapper">
    <main class="venue-main">
        <h1>Welcome to <?php if($id ==1) {
            echo substr($venue_name,0,7);
        } elseif ($id ==2) {
            echo substr($venue_name,0,9);
     } else { echo $venue_name;}?>'s page</h1>
    <div class="venue-content">
        <ul>
        <?php
            echo '
            <li><b>Venue:</b> '.$venue_name.'</li>
            <li><b>Neighborhood:</b> '.$neighborhood.'</li>
            <li><b>Artist Performed:</b> '.$artist_performed.'</li>
            
            
            ';
            ?>
        </ul>
        <?php
        echo '
        <p> '.$history.'</p>
        ';
        ?>
        <p><a href="./venues.php">Return to the venues.php page</a></p>
    </div><!-- venue content end -->
    </main>

    <aside class="venue-aside">
        <h2>Picture of the venue</h2>
        <img src="./images/<?=$image_path?>" alt="Image of <?=$name?>">
           
    </aside>

</div><!-- End of wrapper -->

<?php
include('./includes/footer.php');

?>