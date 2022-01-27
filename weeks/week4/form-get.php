<?php
//Developing forms
//using the $_GET global var

//Logic is : Ask for name and email in my form
//if it is set: yippy skippy
//if not, show me the form
if(isset($_GET['name'],$_GET['email'])) {
           $name = $_GET['name'];
           $email = $_GET['email'];

        } else {
            echo '
            <form action="" method="get">
            <label>NAME</label>
            <input type="text" name="name">

            <label>EMAIL</label>
            <input type="email" name="email">

            <input type="submit" value="Confirm">

            </form>
            ';

        }
//name="name" references line 8: $_GET['name']

?>