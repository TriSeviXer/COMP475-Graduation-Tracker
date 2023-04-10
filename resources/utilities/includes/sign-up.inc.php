<?php

//if the user accessed the includes file through the submit button...
if (isset($_POST['submit'])) {

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordRepeat = $_POST['confirmedPassword'];
}
//if the user DID NOT access the includes file through the submit button...
else {
  
  header("location: /COMP475-Graduation-Tracker/web-pages/login/sign-up.php?error=didNotComeFromSubmit");
}

//includes
require_once 'database-handler.inc.php';
require_once 'login-sign-up-functions.inc.php';


//error handling to make sure none of the fields are empty
if (areThereEmptyFieldsSignUp($firstName, $lastName, $email, $password, $passwordRepeat)) {
  //sends the user back to Sign up page
  header("location: /COMP475-Graduation-Tracker/web-pages/login/sign-up.php?sign-up=emptyInput");
  exit();
}

//invalid username
//invalid email
//make sure the passwords match 
//username already exists
//password strength?
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("location: /COMP475-Graduation-Tracker/web-pages/login/sign-up.php?sign-up=invalidEmail");
  exit();
} 

if (doesEmailExist($conn, $email)){
  header("location: /COMP475-Graduation-Tracker/web-pages/login/sign-up.php?sign-up=emailIsTaken");
  exit();
}

if (arePasswordsDifferent($password, $passwordRepeat)){
  header("location: /COMP475-Graduation-Tracker/web-pages/login/sign-up.php?sign-up=passwordsDoNotMatch");
  exit();
}

//sign up the user if no errors
//createUser($conn, $firstName, $lastName, $email, $password);
header("location: /COMP475-Graduation-Tracker/web-pages/login/login.php?sign-up=success");





