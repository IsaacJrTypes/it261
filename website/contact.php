<?php
include('config.php');
include('includes/header.php');
?>
<div id="wrapper">
    <div id="hero">

    </div><!-- End hero -->
    <main class="form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
    <legend>Contact Isaac</legend>
    
    <label>First Name</label>
    <input type="text" name="fname" value="<?php if(isset($_POST['fname'])) echo htmlspecialchars($_POST['fname']);?>">
    <span class="error"><?= $fNameErr?></span>

    <label>Last Name</label>
    <input type="text" name="lname" value="<?php if(isset($_POST['lname'])) echo htmlspecialchars($_POST['lname']);?>">
    <span class="error"><?= $lNameErr?></span>
    
    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
    <span class="error"><?= $emailErr?></span>

    <label>What kind of visitor are you?</label>
    
    <ul>
        <li><input type="radio" name="visitor" value="recruiter" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='recruiter') echo 'checked = "checked" ' ?> > Recruiter</li>

        <li><input type="radio" name="visitor" value="programmer" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='programmer') echo 'checked = "checked" ' ?> > Programmer</li>

        <li><input type="radio" name="visitor" value="webDev" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='webDev') echo 'checked = "checked" ' ?> > Web Developer</li>
       
        <li><input type="radio" name="visitor" value="voyeur" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='voyeur') echo 'checked = "checked" ' ?> > A regular person checking out your site!</li>
    </ul>
    <span class="error"><?= $visitorErr?></span>

    <label>Phone</label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
    <span class="error"><?= $phoneErr?></span>

    <label>Favorite Programming Language </label>
    
    <ul>
        <li><input type="checkbox" name="pLang[]" value="html/Css" <?php if(isset($_POST['pLang'])&& in_array('html/Css', $pLang)) echo 'checked = "checked" ' ?> > HTML/CSS</li>

        <li><input type="checkbox" name="pLang[]" value="js" <?php if(isset($_POST['pLang'])&& in_array('js', $pLang)) echo 'checked = "checked" ' ?> > JavaScript</li>

        <li><input type="checkbox" name="pLang[]" value="php" <?php if(isset($_POST['pLang'])&& in_array('php', $pLang)) echo 'checked = "checked" ' ?> > PHP</li>

        <li><input type="checkbox" name="pLang[]" value="python" <?php if(isset($_POST['pLang'])&& in_array('python', $pLang)) echo 'checked = "checked" ' ?> > Python</li>
       
        <li><input type="checkbox" name="pLang[]" value="java" <?php if(isset($_POST['pLang'])&& in_array('java', $pLang)) echo 'checked = "checked" ' ?> > Java</li>

        <li><input type="checkbox" name="pLang[]" value="c#" <?php if(isset($_POST['pLang'])&& in_array('c#', $pLang)) echo 'checked = "checked" ' ?> > C#</li>
        
        <li><input type="checkbox" name="pLang[]" value="other" <?php if(isset($_POST['pLang'])&& in_array('other', $pLang)) echo 'checked = "checked" ' ?> > Other (include in comments)</li>
    </ul>

    <span class="error"><?= $pLangErr?></span>

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

<?php
include('includes/footer.php')
?>