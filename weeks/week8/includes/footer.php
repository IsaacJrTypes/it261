<footer>
<div class="inner">
    <ul>
        <li>Copyright <?=date('Y')?></li>
        <li><a href="../../index.php">Web Design by Isaac</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
    </ul>
</div>

</footer>

<script></script>
<?php
//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);
?>
<script src="../../js/validator.js"></script>
</body>
</html>