<?php
//index page -> show session_start()
session_start();
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    <!-- End hero -->
    <main class="form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
    <legend>Contact me about your favorite venue!</legend>
    
    <label>First Name</label>
    <input type="text" name="fname" value="<?php if(isset($_POST['fname'])) echo htmlspecialchars($_POST['fname']);?>">
    <span class="error"><?= $fNameErr?></span>

    <label>Last Name</label>
    <input type="text" name="lname" value="<?php if(isset($_POST['lname'])) echo htmlspecialchars($_POST['lname']);?>">
    <span class="error"><?= $lNameErr?></span>
    
    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
    <span class="error"><?= $emailErr?></span>

    <label>How did you here about this site?</label>
    
    <ul>
        <li><input type="radio" name="visitor" value="recruiter" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='recruiter') echo 'checked = "checked" ' ?> > Recruiter</li>

        <li><input type="radio" name="visitor" value="online" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='online') echo 'checked = "checked" ' ?> > Online</li>

        <li><input type="radio" name="visitor" value="github" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='github') echo 'checked = "checked" ' ?> > GitHub</li>
       
        <li><input type="radio" name="visitor" value="friend" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='friend') echo 'checked = "checked" ' ?> > A friend!</li>
    </ul>
    <span class="error"><?= $visitorErr?></span>

    <label>Phone</label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
    <span class="error"><?= $phoneErr?></span>

    <label>Favorite Venue </label>
    
    <ul>
        <li><input type="checkbox" name="venue[]" value="showbox" <?php if(isset($_POST['venue'])&& in_array('showbox', $venue)) echo 'checked = "checked" ' ?> > Showbox at The Market</li>

        <li><input type="checkbox" name="venue[]" value="crocodile" <?php if(isset($_POST['venue'])&& in_array('crocodile', $venue)) echo 'checked = "checked" ' ?> > The Crocodile</li>

        <li><input type="checkbox" name="venue[]" value="neumos" <?php if(isset($_POST['venue'])&& in_array('neumos', $venue)) echo 'checked = "checked" ' ?> > Neumos</li>

        <li><input type="checkbox" name="venue[]" value="corazon" <?php if(isset($_POST['venue'])&& in_array('corazon', $venue)) echo 'checked = "checked" ' ?> > El Corazón</li>
       
        <li><input type="checkbox" name="venue[]" value="neptune" <?php if(isset($_POST['venue'])&& in_array('neptune', $venue)) echo 'checked = "checked" ' ?> > Neptune Theater</li>

        <li><input type="checkbox" name="venue[]" value="paramount" <?php if(isset($_POST['venue'])&& in_array('paramount', $venue)) echo 'checked = "checked" ' ?> > Paramount Theater</li>
        
        <li><input type="checkbox" name="venue[]" value="other" <?php if(isset($_POST['venue'])&& in_array('other', $venue)) echo 'checked = "checked" ' ?> > Other (include in comments)</li>
    </ul>

    <span class="error"><?= $venueErr?></span>

    <label>What U.S. region are you visiting from?</label>
    <select name="regions">
    <option value="" NULL <?php if(isset($_POST['regions'])&& $_POST['regions'] == NULL) echo 'selected = "unselected" ';?> >Select one</option>

    <option value="wc" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'wc') echo 'selected = "selected" ';?> >West Coast</option>

    <option value="rm" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'rm') echo 'selected = "selected" ';?> >Rocky Mountains</option>

    <option value="mw" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'mw') echo 'selected = "selected" ';?> >Midwest</option>
    
    <option value="ne" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'ne') echo 'selected = "selected" ';?> >North East</option>
    
    <option value="south" <?php if(isset($_POST['regions'])&& $_POST['regions'] == 'south') echo 'selected = "selected" ';?> >South</option>

    </select>
    <span class="error"><?= $regionsErr?></span>

    <label>Comments</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
    <span class="error"><?= $commentsErr?></span>

    <label>Privacy</label>
    
    <ul>
        <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy'])&&$_POST['privacy']=='yes') echo 'checked = "checked" ' ?> >You must agree!</li>
    </ul>
    <span class="error"><?= $privacyErr?></span>

    <input type="submit" value="Send it!">
    </fieldset>
    <p><a href="">Reset</a></p>
    </form>

    </main>
</div><!-- End wrapper -->
<?php include('./includes/footer.php');?>