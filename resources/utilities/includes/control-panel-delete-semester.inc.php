<?php

session_start();

//includes
require_once "database-handler.inc.php";
require_once "control-panel-semester-couses.inc.php";

$user_id = $_SESSION["user_id"];
$semester_id = $_POST['semester_id'];

$sql = "delete 
        from semester
        where semester_id = '".$semester_id."' 
        ;";

$conn->query( $sql );

loadSemesterAndCourses($user_id, $conn);

