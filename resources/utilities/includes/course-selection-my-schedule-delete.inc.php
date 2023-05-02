<?php

//includes
require_once 'database-handler.inc.php';

if ($_POST['class_id'] == -1 ){
}
else{

    // make a select statement to get data from the database
$sql= "DELETE from semester_class where class_id = ".$_POST['class_id']." AND semester_id = ".$_POST['semester_id'].";";

// execute the query
$Results = $conn->query( $sql );

}




$sql = "select class.class_id, class.class_code, class.class_name
        from class 
        INNER JOIN semester_class
        ON semester_class.class_id = class.class_id
        where semester_class.semester_id = ".$_POST['semester_id'].";";

// execute the query
$Results = $conn->query( $sql );

// check for results
//      $Results will evaluate to true if there data is returned
//      from the database, false if no data is returned
if ( $Results )
{
    // results returned
//   echo "<h2>Classss ".$_POST['mathematicalComputationalThinking']."</h2>\n";
//   echo "<h2>Classss ".$_POST['writtenCommunication']."</h2>\n";

    // loop through the results
    //      the fecth_row method returns an array of the column
    //      data - one item in the array for each column in the
    //      select statement.
    //
    //      the statement in the while will evaluate to false when
    //      there are no more rows
    while( $Row = $Results->fetch_row() )
    {

    echo"<section id=\"scheduled_class_id_".$Row[0]."\" class=\"dropdown-box\">
            <header>
                <button onclick=\"toggleContent('scheduled_class_id_".$Row[0]."')\">
                    <img class=\"icon\" src=\"/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg\">
        ";

        //loop through the items in the array
        //the count function returns the number of items
        //in the array.
        for( $i=1; $i<count($Row); $i++ )
        {
            // add table cells
            echo "$Row[$i] ";
        }

        echo"
                </button>
                <button class=\"negative\" onclick=\"removeScheduledCourse(".$Row[0].", ".$_POST['semester_id'].")\">Remove</button>
            </header>
            <article>
                <h1>Course Description</h1>
                <p>Example description text.</p>
                <h1>Prerequisites</h1>
                <p>None</p>
            </article>
        </section>
    ";
               
    } 
}



