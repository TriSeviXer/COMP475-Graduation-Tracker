<?php
    session_start();

    //includes
    require_once 'database-handler.inc.php';

//if the user accessed the includes file through the submit button...
if (isset($_POST['submit'])) {

    $semester = $_POST['Semester'];
    $year = $_POST['year'];

    $scheduleID;
    
    $sql = "select schedule_id from user_schedule where user_id = '".$_SESSION["user_id"]."';";

    //execute the query
    $Results = $conn->query( $sql );
    $Row = $Results->fetch_row();

    if ($Row)
    {
        $scheduleID = $Row[0];
        
    }else{

        $sql = "INSERT INTO `schedule`(`schedule_name`) VALUES ('schedule name');";
        $conn->query( $sql );

        $sql = "SELECT MAX(schedule_id) FROM schedule;";
        $Results = $conn->query( $sql );

        $Row = $Results->fetch_row();
        $scheduleID = $Row[0];

        $sql= "INSERT INTO user_schedule(user_id, schedule_id) VALUES (".$_SESSION["user_id"].", $Row[0]);";
        $Results = $conn->query( $sql );

    }

    $sql = "select semester.semester_id 
    from semester
    INNER JOIN schedule_semester
    ON schedule_semester.semester_id=semester.semester_id
    where semester.semester_name = '".$semester." ".$year."'
    AND schedule_semester.schedule_id = '".$scheduleID."'
    ;";
    echo $sql;
    
    $Results = $conn->query( $sql );
    $Row = $Results->fetch_row();

    if ($Row)
    {
    
        
    }else{

   
        $sql = "INSERT INTO `semester`(`semester_name`) VALUES ('".$semester." ".$year."');";
        $conn->query( $sql );

        $sql = "SELECT MAX(semester_id) FROM semester;";
        $Results = $conn->query( $sql );
        $Row = $Results->fetch_row();

        $sql= "INSERT INTO schedule_semester(schedule_id, semester_id) VALUES (".$scheduleID.", $Row[0]);";
        $Results = $conn->query( $sql );

    }

    $semester_name = $semester . " " . $year;
    header("location: /COMP475-Graduation-Tracker/web-pages/account/course-selection.php?semester_id=$Row[0]&semester_name=$semester_name");
}
