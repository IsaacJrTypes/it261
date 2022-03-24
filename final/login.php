<?php
//login page will point to server.php page, small form only containing username and password, submit
//if everything is correct, you are sent to index.php page!
include('server.php');
include('includes/header-no-nav.php');
?>
<div id="wrapper">
    <div class="card-container">
        <h1 class="center">Login page!</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">

            <fieldset class="login">
                <label>Username</label> 
                <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">
                <label>Password</label>
                <input type="password" name="password">
                
                <button type="submit" class="btn" name="login_user">Login</button>
                
                <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'">Reset</button>
                <?php include('errors.php');?>
            </fieldset>
        </form>

        <p class="center">Haven't registered? Please visit our <a href="register.php">Register page!</a></p>
    </div><!-- close card container -->

</div><!-- close #wrapper -->

<?php include('includes/footer-no-nav.php');