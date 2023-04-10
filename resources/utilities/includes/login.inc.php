<?php

//if the user accessed the includes file through the submit button...
if (isset($_POST['submit'])) {



  $email = $_POST['email'];
  $password = $_POST['password'];

}
//if the user DID NOT access the includes file through the submit button...
else {
  
    header("location: /COMP475-Graduation-Tracker/web-pages/login/sign-up.php?error=didNotComeFromSubmit");
}

//includes
require_once 'database-handler.inc.php';
require_once 'login-sign-up-functions.inc.php';

//error handling to make sure none of the fields are empty
if (areThereEmptyFieldsLogin($email, $password)) {
    //sends the user back to Sign up page
    header("location: /COMP475-Graduation-Tracker/web-pages/login/login.php?login=emptyInput");
    exit();
}

loginUser($conn, $email, $password);
header("location: /COMP475-Graduation-Tracker/web-pages/index.php?login=sucess");