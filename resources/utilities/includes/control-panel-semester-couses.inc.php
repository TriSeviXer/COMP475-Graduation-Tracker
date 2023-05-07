<?php

echo"   <script src=\"../../resources/utilities/scripts/control-panel.js\" defer></script>";



    function loadSemesterAndCourses($user_id, $conn){

        $sql = "select schedule_id
        from user_schedule
        where user_id = '".$user_id."' 
        ;";

        //execute the query
        //use the query method of the $Connection object
        $Results = $conn->query( $sql );

        // check for results
        //      $Results will evaluate to true if there data is returned
        //      from the database, false if no data is returned
        if ( $Results ){


            if($Row = $Results->fetch_row()){
                $schedule_id = $Row[0];

                $sql = "select schedule_semester.semester_id, semester.semester_name
                from schedule_semester
                INNER JOIN semester
                ON schedule_semester.semester_id=semester.semester_id
                where schedule_id = '".$schedule_id."' 
                ;";

                //execute the query
                //use the query method of the $Connection object
                $Results = $conn->query( $sql );

                if($Results){

                    // results returned

                    // loop through the results
                    //      the fecth_row method returns an array of the column
                    //      data - one item in the array for each column in the
                    //      select statement.
                    //
                    //      the statement in the while will evaluate to false when
                    //      there are no more rows
                    while( $Row = $Results->fetch_row() )
                    {

                        $semester_id=$Row[0];
                        $semester_name = $Row[1];

                        echo"
                            <section id='".$semester_id."' class=\"dropdown-box\">
                                <header>
                                    <button onclick=\"toggleContent('".$semester_id."')\">
                                        <img class=\"icon\" src=\"/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg\">
                                        ".$semester_name."
                                    </button>
                                    <button class=\"negative\" onclick=\"removeSemester(".$semester_id.")\">Remove</button>
                                    <button class=\"positive\" onclick=\"window.location.href='/COMP475-Graduation-Tracker/web-pages/account/course-selection.php?semester_id=".$semester_id."&semester_name=".$semester_name."'\">Edit</button>
                                </header>
                                <article>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        ";

                        $sql = "select semester_class.class_id, class.class_code, class.class_name
                            from semester_class
                            INNER JOIN class
                            ON semester_class.class_id = class.class_id
                            where semester_class.semester_id = '".$semester_id."' 
                            ;";

                            $Results2 = $conn->query( $sql );


                        //loop through the items in the array
                        //the count function returns the number of items
                        //in the array.
                        while( $Row2 = $Results2->fetch_row() )
                        {

                            

                            echo"
                                            <tr>
                                                <td>".$Row2[1]."</td>
                                                <td>".$Row2[2]."<td>
                                            </tr>
                            ";
                        }

                        echo "
                                        
                                        </tbody>
                                    </table>
                                </article>
                            </section>
                        ";
                    }
                }
            }
        }
    }

