<?php
//this file triggers sessions
//session stores session information

/* How we created our users table
CREATE TABLE users ( 
    user_id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(20) NOT NULL, 
    last_name VARCHAR(20) NOT NULL, 
    email VARCHAR(50) NOT NULL,
    username VARCHAR(20) NOT NULL, 
    password VARCHAR(50) NOT NULL
) 
*/

session_start();
include('config.php');
//eventually include header here
//include('./includes/header.php')

//setup var
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password_1 = '';
$password_2 = '';
$errors = array();
$success = 'You are logged in!';

//server.php will connect with db
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//reg user using if isset(reg_user)
if(isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn,$_POST['first_name']);
    
    $last_name = mysqli_real_escape_string($iConn,$_POST['last_name']);
    
    $email = mysqli_real_escape_string($iConn,$_POST['email']);
    
    $username = mysqli_real_escape_string($iConn,$_POST['username']);
    
    $password_1 = mysqli_real_escape_string($iConn,$_POST['password_1']);
    
    $password_2 = mysqli_real_escape_string($iConn,$_POST['password_2']);
    //make sure all input fields are filled out
    //if empty, use push_array function
    if(empty($first_name)) {
        array_push($errors,'First name is required!!');
    }
    
    if(empty($last_name)) {
        array_push($errors,'Last name is required!!');
    }
    
    if(empty($email)) {
        array_push($errors,'Email is required!!');
    }
    
    if(empty($username)) {
        array_push($errors,'Username is required!!');
    }
    
    if(empty($password_1)) {
        array_push($errors,'Password is required!!');
    }

    if($password_1!==$password_2) {
        array_push($errors,'Password do not match!!');
    }

    //check user name and password and selecting from the table
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";

    $result = mysqli_query($iConn, $user_check_query)or die(myError(__FILE__,__LINE__,mysqli_error($iConn))) ;

    $rows = mysqli_fetch_assoc($result);

    //if statment with 2 nested if statements. No duplicate username, emails
    if($rows) {
        if($rows['username']==$username) {
            array_push($errors,'Username already exists!');
        }
    
        if($rows['email']==$username) {
            array_push($errors,'Email already exists!');
        }
    }//close big rows

    //count errors
    if(count($errors)==0) {
        $password = md5($password_1);

        //insert info to table db
        $query = "INSERT INTO users (first_name,last_name,email,username,password) VALUES('$first_name','$last_name','$email', '$username','$password') ";

        mysqli_query($iConn,$query);

        
        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        //if successful, direct to login page
        header('Location:login.php');

    }//close count

} //end isset reg_user

//if login_user isset
if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn,$_POST['username']);
    $password = mysqli_real_escape_string($iConn,$_POST['password']);

    if(empty($username)) {
        array_push($errors,'Please enter username');
    }
    if(empty($password)) {
        array_push($errors,'Please enter password');
    }

        if(count($errors)==0) {
            $password = md5($password);

            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $results = mysqli_query($iConn,$query);
                
            if(mysqli_num_rows($results)==1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = $success;

                header('Location:index.php');
            } else {
                array_push($errors,'Wrong username and password, try again!');
            }// close num_rows else


        }//count errors



}//end login_user isset

?>