<?php

echo("<p>h</p>");

/*


//did the user actually get here through the submit button
//stops the user from going into the url and accessing the inc page that way
if (isset($_POST['submit'])) {
  // include_once "DATABASEFILENAME.inc.php";

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $passwordRepeat = $_POST['passwordRepeat'];

}







  



  require_once 'databaseHandler.inc.php';
  require_once 'functions.inc.php';




//error handling to make sure none of the fields are empty
  if (areThereEmptyFields($firstName, $lastName, $email, $username, $password, $passwordRepeat)) {
    //sends the user back to Sign up page
    header("Location: signUp.html?signup=empty");
    exit(); 
  }
  //invalid username
    //invalid email
    //make sure the passwords match 
    //username already exists
    //password strength?
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: login.html?signup=invalidemail");
      exit();
  }
  else{
      //sign up the user
      createUser($conn, $firstName, $lastName, $email, $username, $password);
  }
}
else{
  header("Location: login.html?signup=error");
}

function areThereEmptyFields($firstName, $lastName, $email, $username, $password, $passwordRepeat){

  //if any of the input fields are empty retrun true
  if (empty($firstName) || empty($lastName) || empty($email) || empty($username) || empty($password)){
    return true;
  }
    //if none of the fields are empty return false
    return false;
}

function areThereInvalidCharachters(){
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    return true;
  }
  return false;
}

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
  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
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


function $createUser($conn, $firstName, $lastName, $email, $username, $password){
  //question mark is a placeholder for username
  //prevents sql injection by sending sql statement to database first
  //then fills in placeholders
  $sql = "INSERT INTO users (usersFirstName, usersLastName, usersEmail, usersUsername, usersPassword) VALUES (?,?,?,?,?);";


  $stmt = mysqli_stmt_init($conn);

  //check for errors
  //if statement cannot be prepared with database connection
  if (!mysqli_stmt_prepare($stmt, $sql)){
    //error
    header("location: ../signUp.php?error=preparedStatementFailed");
    exit();
  }

  //hashes/encrypts password to keep it secure and unreadable in database
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT)

  //bind the statement with username and password input(statement, datatypes, data, data)
  mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $username, $password);
  //execute the sql statement with username and passwordr
  mysqli_stmt_execute($stmt);

  //closes the prepared statement
  mysqli_stmt_close($stmt);

  //send user back to homepage after signing uo
  header("location: ../signUp.php?error=none");

}
*/
