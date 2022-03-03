<?php
include('config.php');
include('includes/header.php');
?>
<div id="wrapper">
    
    <main class="index">
        <h1>Gallery of AEW Wrestlers</h1>
        <table>
        <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Hometown</th>
            <th>Alternative Picture</th>
        </tr>
    <?php foreach($wrestler as $name => $image): ?>
        <tr>
            <td class="cover"><img src="images/<?php echo substr($image,0,5); ?>.jpg" alt="Picture of <?php echo str_replace('_', ' ', $name);?>"></td>
            <td><?php echo str_replace('_', ' ', $name);?></td>
            <td><?php echo substr($image,6,-8); ?></td>
            <td class="cover"><img src="images/<?php echo substr($image,-7,-1); ?>.jpg" alt="Alternative picture of <?php echo str_replace('_', ' ', $name);?>"></td>
        </tr>
    <?php endforeach; ?>
    </table>
      
    </main>
</div><!-- End wrapper -->

<?php
include('includes/footer.php')
?>