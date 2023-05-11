<?php
    //includes
    require_once 'database-handler.inc.php';

    echo"<h1>MY MAJORS</h1>";

    echo'
    <section id="gen-eds" class="dropdown-box">
                    <header>
                        <button onclick="toggleContent(\'gen-eds\')">
                            <img class="icon" src="/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg">
                            General Education
                        </button>
                        <button class="nutural">View</button>
                    </header>
                    <article>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Requirement</th>
                                        <th>Required</th>
                                        <th>Met</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mathematical and Computational Thinking</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Written Communication</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Oral Communication</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Philosophy, Literature, and Aesthetic</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Natural Science Inquiry</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Historical, Behavioral, and Social Science</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Global Awareness & Citizenship</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Wellness</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                    </article>
                </section>
            ';


    $user_id = $_POST['user_id'];

    $sql = "select user.major_id, major.major_name 
    from user
    INNER JOIN major
    ON user.major_id = major.major_id
    where user.user_id = '".$user_id."';";

    if($Results = $conn->query( $sql )){

        if ($Row = $Results->fetch_row()){

            $major_id = $Row[0];
            $major_name = $Row[1];

            echo"

                <section id=\"major_id".$major_id."\" class=\"dropdown-box\">
                    <header>
                        <button onclick=\"toggleContent('major_id".$major_id."')\">
                            <img class=\"icon\" src=\"/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg\">
                            ".$major_name."
                        </button>
                        <button class=\"negative\" onclick=\"deleteMajor(".$user_id.")\">Remove</button>
                        <button class=\"nutural\">View</button>
                    </header>
                    <article>
                        <h1>Major Description</h1>
                        <p>Example major description.</p>
                    </article>
                </section>

            ";

            

        }

    }

    echo"<button class=\"positive\" onclick=\"toggleDialog('dialog-major')\">Select Major</button>";
