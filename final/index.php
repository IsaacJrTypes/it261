<?php

//index page -> show session_start()
session_start();

include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    
    <main class="index">
        <h1 class="center"><?=$headline?></h1>
        <div class="img-container">
        <img src="./images/guitarist.jpg" alt="silhouette of a guitar player">
        </div>
        
        <p>Seattle has changed extensively in the past few years. There are moments when I cannot recognize my hometown. One thing that hasn’t changed, is the musical influence this city has had on the world. </p>
        <p>The various musical venues throughout the city have given local musicians a platform to express themselves. A platform for people to connect with the city’s history through music.  This website is a tribute to Seattle’s storied music scene.</p>
        
        
    </main>
</div><!-- End wrapper -->
<?php include('./includes/footer.php');?>