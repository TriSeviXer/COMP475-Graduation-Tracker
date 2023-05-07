<?php
    //includes
    require_once 'database-handler.inc.php';

    $user_id = $_POST['user_id'];

    $sql = "UPDATE user
    SET major_id = NULL
    WHERE user_id = $user_id;";

    if($Results = $conn->query( $sql )){

        include 'control-panel-display-major.inc.php';
    }