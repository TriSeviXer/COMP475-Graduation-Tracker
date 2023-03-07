<?php

echo("<p>sign-up.inc.php</p>");

//if the user accessed the includes file through the submit button...
if (isset($_POST['submit'])) {

  echo("<p>Came from submit!</p>");

  $firstName = $_POST['firstName'];
  echo($firstName);
  echo("<br>");

  $lastName = $_POST['lastName'];
  echo($lastName);
  echo("<br>");

  $email = $_POST['email'];
  echo($email);
  echo("<br>");

  $password = $_POST['password'];
  echo($password);
  echo("<br>");

  $passwordRepeat = $_POST['confirmedPassword'];
  echo($passwordRepeat);
  echo("<br>");


}
//if the user DID NOT access the includes file through the submit button...
else{
  echo("<p>did NOT come from submit button submit</p>");
}







  



  require_once 'database-handler.inc.php';
  //require_once 'functions.inc.php';




//error handling to make sure none of the fields are empty
  if (areThereEmptyFields($firstName, $lastName, $email, $password, $passwordRepeat)) {
    //sends the user back to Sign up page
    header("location: ../../../web-pages/login/sign-up.html?signup=empty");
    exit(); 
  }


  //invalid username
    //invalid email
    //make sure the passwords match 
    //username already exists
    //password strength?
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("location: ../../../web-pages/login/sign-up.html?signup=invalidemail");
      exit();
  }
  else{
      //sign up the user
      createUser($conn, $firstName, $lastName, $email, $password);
  }


function areThereEmptyFields($firstName, $lastName, $email, $password, $passwordRepeat){

  //if any of the input fields are empty retrun true
  if (empty($firstName) || empty($lastName) || empty($email) || empty($password)){
    return true;
  }
    //if none of the fields are empty return false
    return false;
}

/*
function areThereInvalidCharachters(){
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    return true;
  }
  return false;
}
*/

function isEmailInvalid($email){
  if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    return true;
  }
  return false;

}

function arePasswordsDifferent($password, $passwordRepeat){
  if ($password != $passwordRepeat){
    return true;
  }
  return false;
} 

/*
function doesUsernameAlreadyExist($conn, $username, $email){
  //question mark is a placeholder for username
  //prevents sql injection by sending sql statement to database first
  //then fills in placeholders
  $sql = "SELECT * FROM users WHERE username = ? OR userEmail = ?;";


  $stmt = mysqli_stmt_init($conn);

  //check for errors
  //if statement cannot be prepared with database connection
  if (!mysqli_stmt_prepare($stmt, $sql)){
    //error
    header("location: ../signUp.php?error=preparedStatementFailed");
    exit();
  }

  //bind the statement with username and password input(statement, datatypes, data, data)
  mysqli_stmt_bind_param($stmt, "s", $email);
  //execute the sql statement with username and passwordr
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  //if there are results...
  if ($row = mysqli_fetch_assoc($resultData)){
    //return the data that exists
    return $row;

  }
  // if there are no results
  else{
    return false;
  }

  //closes the prepared statement
  mysqli_stmt_close($stmt);
}
*/


function createUser($conn, $firstName, $lastName, $email, $password){
  //question mark is a placeholder for username
  //prevents sql injection by sending sql statement to database first
  //then fills in placeholders
  $sql = "INSERT INTO users (usersFirstName, usersLastName, usersEmail, usersPassword) VALUES (?,?,?,?);";


  $stmt = mysqli_stmt_init($conn);

  //check for errors
  //if statement cannot be prepared with database connection
  if (!mysqli_stmt_prepare($stmt, $sql)){
    //error
    header("location: ../../../web-pages/login/sign-up.html?error=preparedStatementFailed");
    exit();
  }

  //hashes/encrypts password to keep it secure and unreadable in database
  //$hashedPassword = password_hash($password, PASSWORD_DEFAULT)

  //bind the statement with username and password input(statement, datatypes, data, data)
  mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $password);
  //execute the sql statement with username and passwordr
  mysqli_stmt_execute($stmt);

  //closes the prepared statement
  mysqli_stmt_close($stmt);

  //send user back to homepage after signing uo
  header("location: ../../../web-pages/login/sign-up.html?error=none");
}

