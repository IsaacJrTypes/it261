<?php
//people-view.php
include('config.php');
//if id has been set!
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

//select from the table and make sure that peopleId = $id
$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

//place all of the php here BEFORE we call out the header.php





include('./includes/header.php')
?>
    <main>
        <h1>Welcome to our people view page!</h1>
    </main>

    <aside>
        <h3>We will display the image of the politician that we see on this page!</h3>
    </aside>
</div><!-- End of wrapper -->

<?php
include('./includes/footer.php');

?>