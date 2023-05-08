<?php
    session_start();

    //includes
    require_once "../../resources/utilities/includes/database-handler.inc.php";
    require_once '../../resources/utilities/includes/control-panel-semester-couses.inc.php';
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Graduation Tracker</title>
        <link rel="Stylesheet" type="text/css" href="../../resources/utilities/styles/grad-tracker.css">
        <script src="../../resources/utilities/scripts/grad-script.js" defer></script>
        <script src="../../resources/utilities/scripts/control-panel.js" defer></script>
    </head>
    <?php
    echo"<body onload=\"displayMajor(".$_SESSION["user_id"].")\">";
    ?>
        <?php
            include '../../resources/utilities/includes/navigation.inc.php';
        ?>
        <header>
            <h1>Control Panel</h1>
        </header>
        <main class="selection">
            <section class="container">
                <h1>MY PROFILE</h1>
                <figure>
                    <img src="../../resources/images/icons/icon-user-default.svg" alt="User profile.">
                    <figcaption><?php
                    
                    if (isset($_SESSION["user_id"])){

                        // make a select statement to get data from the database
                        $SQL = "select user_email from user where user_id = '".$_SESSION["user_id"]."';";

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

                                echo"".$Row[0]."";
                            }

                        }
                        else
                        {
                            // no results returned
                            echo "<p>No results returned from the query</p>\n";
                        }
                
                    }

                    ?></figcaption>
                </figure>
                <button>Settings</button>
                <button>Help</button>
            </section>

            <section class="container" id=major>
                <!-- Heading for Tracking -->
                <h1>MY MAJORS</h1>


<!--
                    <section id="user_major_id" class="dropdown-box">
                        <header>
                            <button onclick="toggleContent('user_major_id')">
                                <img class="icon" src="/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg">
                                BS Computer Science
                            </button>
                            <button class="negative">Remove</button>
                            <button class="nutural">View</button>
                        </header>
                        <article>
                            <h1>Major Description</h1>
                            <p>Example major description.</p>
                        </article>
                    </section>
-->

                <button class="positive" onclick="toggleDialog('dialog-major')">Select Major</button>

            </section>
            <section class="container" id=semestersAndCourses>
                
                <!-- Heading for Schedules -->
                <h1>MY SCHEDULES</h1>


                
                <?php
                
                loadSemesterAndCourses($_SESSION["user_id"], $conn);
                ?>
<!--
                    <section id="spring-2024" class="dropdown-box">
                        <header>
                            <button onclick="toggleContent('spring-2024')">
                                <img class="icon" src="/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg">
                                Spring 2024
                            </button>
                            <button class="negative">Remove</button>
                            <button class="positive" onclick="window.location.href='/COMP475-Graduation-Tracker/web-pages/account/course-selection.php';">Edit</button>
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
                                    <tr>
                                        <td>COMP100</td>
                                        <td>Introduction to Computers<td>
                                    </tr>
                                    <tr>
                                        <td>COMP100</td>
                                        <td>Introduction to Computers<td>
                                    </tr>
                                </tbody>
                            </table>
                        </article>
                    </section>
-->

                <button class="positive" type="button" onclick="toggleDialog('dialog-schedule')">New Schedule</button>
<!--
                <button class="positive">Add Schedule</button>
                <section id="add-schedule" class="dropdown-box">
                    <header class="positive">
                        <button onclick="openDialog('dialog-schedule')">New Schedule</button>
                    </header>
                    <article>
                        <select name="Semester">
                            <option>Fall</option>
                            <option>Winter</option>
                            <option>Spring</option>
                            <option>Summer</option>
                        </select>
                        <input type="number" min="2023" max="2053" step="1" value="2023">
                        <button class="positive">Add</button>
                    </article>
                </section>
-->
            </section>
            
        </main>

        <!-- Dialog box for adding schedules. -->
        <section id="dialog-schedule" class="dialog collapsed">
            <form action="../../resources/utilities/includes/control-panel.inc.php" method="post">
                <h1>Add Schedule</h1>
                <fieldset>
                    <section>
                        <select name="Semester">
                            <option value="Fall">Fall</option>
                            <option value="Winter">Winter</option>
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                        </select>
                        <input name="year" type="number" min="2023" max="2053" step="1" value="2023">
                    </section>
                    <section class="right-align">
                        <button class="negative" type="button" onclick="toggleDialog('dialog-schedule')">Cancel</button>
                        <button class="positive" type="submit" name="submit">Add</button>
                    </section>
                </fieldset>
            </form>
        </section>

        <!-- Dialog box for adding majors. -->
        <section id="dialog-major" class="dialog collapsed">
            <form action="../../resources/utilities/includes/control-panel.inc.php" method="post">
                <h1>Select Major</h1>
                <fieldset>
                    <section>
                        <select name="major" >
                            <option value="Computer Science">BS Computer Science</option>
                        </select>
                    </section>
                    <section class="right-align">
                        <button class="negative" type="button" onclick="toggleDialog('dialog-major')">Cancel</button>
                        <button class="positive" type="submit" name="submit" onclick="toggleDialog('dialog-major')">Add</button>
                    </section>
                </fieldset>
            </form>
        </section>
    </body>
<html>