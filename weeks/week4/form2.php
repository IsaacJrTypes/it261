<?php
//logic: no input -> show warning
//first_name, last_name, email, comments


if (isset($_POST['fname'],
          $_POST['lname'], 
          $_POST['email'],
          $_POST['msg'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
if(empty($_POST['name'] && $_POST['email'] && $_POST['msg'])) {
  echo 'A form field is missing';
} else {
  echo $fname;
  echo '<br>';
  echo $lname;
  echo '<br>';
  echo $email;
  echo '<br>';
  echo $msg;
  echo '<br>';
}
} else {
  echo '
    <form action="" method="post">
    <label>First Name</label>
    <input type="text" name="fname"></input>
    
    <label>Last Name</label>
    <input type="text" name="lname"></input>
    <label>Email</label>
    <input type="email" name="email"></input>
    <label>Msg</label>
    <textarea name="msg"></textarea>
    <input type="submit" value="send">
    </form>
  ';
}

?>