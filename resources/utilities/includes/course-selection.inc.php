<?php

//includes
require_once 'database-handler.inc.php';

// make a select statement to get data from the database
$SQL = "select class_id, class_code, class_name from class
    where   general_education_category_id = '".$_POST['mathematicalComputationalThinking']."' OR
        general_education_category_id = '".$_POST['writtenCommunication']."' OR
        general_education_category_id = '".$_POST['oralCommunication']."' OR
        general_education_category_id = '".$_POST['philosphyLiteratureAesthetic']."' OR
        general_education_category_id = '".$_POST['naturalScienceInquiry']."' OR
        general_education_category_id = '".$_POST['historicalBehavioralSocialScience']."' OR
        general_education_category_id = '".$_POST['globalAwarenessCitizenship']."' OR
        general_education_category_id = '".$_POST['wellness']."'
 
    ;";

// execute the query
//      use the query method of the $Connection object
$Results = $conn->query( $SQL );

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

    echo"<section id=\"class_id_".$Row[0]."\" class=\"dropdown-box\">
            <header>
                <button onclick=\"toggleContent('class_id_".$Row[0]."')\">
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
                <button class=\"positive\" onclick=\"displayScheduledCourses(".$Row[0].")\">Add</button>
            </header>
            <article>
                <h1>Course Description</h1>
                <p>Example description text.</p>
                <h1>Prerequisites</h1>
                <p>None</p>
            </article>
        </section>

       
    ";




    
    /*
    echo"<section id=\"comp100\" class=\"dropdown-box\">
            <header>
                <button onclick=\"toggleContent('comp100')\">
                    <img class=\"icon\" src=\"/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg\">
                    COMP100 Intro to Computers
                </button>
                <button class=\"positive\">Add</button>
            </header>
            <article>
                <h1>Course Description</h1>
                <p>Example description text.</p>
                <h1>Prerequisites</h1>
                <p>None</p>
            </article>
        </section>
    ";
    */
    }

}
else
{
    // no results returned
    echo "<p>No results returned from the query</p>\n";
}
