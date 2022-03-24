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
        <h2 class="center">Screenshot of Users Database</h2>
        <img src="./images/usersDB.png" alt="Screenshot of users table">
    </main>
</div><!-- End wrapper -->
<?php include('./includes/footer.php');?>