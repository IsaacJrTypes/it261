<?php
//index page -> show session_start()
session_start();
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    
    <main class="index">
        <h2 class="center"><?=$headline?></h2>
        <img src="./images/venuesDB.png" alt="Screenshot of venue table">
        <p>Using PHP, the venue page and the venue-view page are generated using the information from the venue table. (See table above) </p>
        <h2 class="center">Screenshot of Users Database</h2>
        <img src="./images/usersDB.png" alt="Screenshot of users table">
        <p>The user table gets updated whenever someone registers using PHP and MySQL. (See table above)</p>
    </main>
</div><!-- End wrapper -->
<?php include('./includes/footer.php');?>