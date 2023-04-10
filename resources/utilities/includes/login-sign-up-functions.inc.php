<?php

function areThereEmptyFieldsSignUp($firstName, $lastName, $email, $password, $passwordRepeat)
{

  //if any of the input fields are empty retrun true
  if (empty($firstName) || empty($lastName) || empty($email) || empty($password || empty($passwordRepeat))) {
    return true;
  }
  //if none of the fields are empty return false
  return false;
}


function isEmailInvalid($email)
{
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  }
  return false;
}



function arePasswordsDifferent($password, $passwordRepeat)
{
  if ($password != $passwordRepeat) {
    return true;
  }
  return false;
}



function doesEmailExist($conn, $email){
  //question mark is a placeholder for username
  //prevents sql injection by sending sql statement to database first
  //then fills in placeholders
  $sql = "SELECT * FROM users WHERE usersEmail = ?;";

  //initialize a new prepared statement
  $stmt = mysqli_stmt_init($conn);

  //check for errors
  //if statement cannot be prepared with database connection
  if (!mysqli_stmt_prepare($stmt, $sql)){
    //error
    header("location: /COMP475-Graduation-Tracker/web-pages/login/sign-up.php?error=preparedStatementFailed");
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



function createUser($conn, $firstName, $lastName, $email, $password)
{
    //question mark is a placeholder for username
    //prevents sql injection by sending sql statement to database first
    //then fills in placeholders
    $sql = "INSERT INTO users (usersFirstName, usersLastName, usersEmail, usersPassword) VALUES (?,?,?,?);";

    //initialize the prepared statement
    $stmt = mysqli_stmt_init($conn);

    //check for errors
    //if statement cannot be prepared with database connection
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    //error
    header("location: /COMP475-Graduation-Tracker/web-pages/login/sign-up.php?error=preparedStatementFailed");
    exit();
    }

    //hashes/encrypts password to keep it secure and unreadable in database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    //bind the statement with username and password input(statement, datatypes, data, data)
    mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $hashedPassword);
    //execute the sql statement with username and passwordr
    mysqli_stmt_execute($stmt);

    //closes the prepared statement
    mysqli_stmt_close($stmt);
}

/*
function areThereInvalidCharachters(){
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    return true;
  }
  return false;
}
*/

//error handling to make sure none of the fields are empty
function areThereEmptyFieldsLogin($email, $password){
  //if any of the input fields are empty retrun true
  if (empty($email) && empty($password)) {
    return true;
  }
  //if neither of the fields are empty return false
  return false;
}

function loginUser($conn, $email, $password){
    $emailExists = doesEmailExist($conn, $email);

    if ($emailExists == false){
        header("location: /COMP475-Graduation-Tracker/web-pages/login/login.php?login=incorrectLogin");
        exit();
    }

    //check to see if the hashed passwords match
    $hashedPassword = $emailExists["usersPassword"];
    $checkHashedPassword = password_verify($password, $hashedPassword);

    if ($checkHashedPassword == false){
        header("location: /COMP475-Graduation-Tracker/web-pages/login/login.php?login=incorrectLogin");
        exit();
    }
    else if ($checkHashedPassword == true){
        session_start();
        $_SESSION["usersId"] = $emailExists["userId"];
    }
}


