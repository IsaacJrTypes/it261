<?php 
include('config.php');
include('includes/header.php'); 
?>
<div id="wrapper" >
      <main class="<?php echo $divClass;?>">
        <section>
          <h2>Philosopher of The Day!</h2>
          <h3><?php echo $today;?>s we celebrate <?php echo $philosopher;?></h3>
          
          <img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <p><?php echo $content; ?>
    </p>
    <p>Content Sourced from Wikipedia</p>
        </section>
      </main>
      <aside class="<?php echo $divClass;?>">
        <h2>Check Out The Other Days</h2>
    
        <ul>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
    </ul>
    <h3>Quote of The Day</h3>
    <blockquote><p><?php echo $quote;?></p></blockquote>
    <cite>-<?=$philosopher?></cite>
      </aside>
    </div>
<?php include 'includes/footer.php'; ?>