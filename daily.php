<?php include 'includes/header.php'; ?>
<div id="wrapper">
      <main>
        <section>
          <h2>Philosoper of The Day!</h2>
          <?php echo $philosoper;?>
          <img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <p><?php echo $content; ?>
    </p>
    <p>Content Sourced from Wikipedia</p>
        </section>
      </main>
      <aside>
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
       
      </aside>
    </div>
<?php include 'includes/footer.php'; ?>