<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Graduation Tracker</title>
        <link rel="Stylesheet" type="text/css" href="../../resources/utilities/styles/grad-tracker.css">
        <script src="../../resources/utilities/scripts/grad-script.js" defer></script>
        <script src="../../resources/utilities/scripts/course-selection.js" defer></script>
    </head>
    <body>
        <?php
            include '../../resources/utilities/includes/navigation.inc.php';
        ?>
        <header>
            <h1>Course Scheduling</h1>
        </header>
        <main class="selection">
            <form>
                <h1>CLASS FILTER</h1>

                <fieldset>
                    <legend>All</legend>
                    <section class="left-align">
                        <input type="checkbox" name="all" id="checkbox-all" onchange="checkAll(this)">
                        <label>Select All</label>
                    </section>
                </fieldset>


                <fieldset>

                    <legend>Tracks</legend>

                    <!-- Filter for Major Related -->
                    <section class="left-align">
                        <input type="checkbox" name="major" id="checkbox-major" onchange="displayCourses()">
                        <label>Major</label>
                    </section>

                    <!-- Filter for Minor Related -->
<!--
                    <section class="left-align">
                        <input type="checkbox" name="minor" id="checkbox-minor" onchange="displayCourses()">
                        <label>Minor</label>
                    </section>
-->

                    <!-- Filter for Concentration Related -->
<!--
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-concentration" onchange="displayCourses()">
                        <label>Concentration</label>
                    </section>

-->

                </fieldset>
                <fieldset>
                    
                    <legend>Intellectual Foundation</legend>

                    <!-- Filter for Mathematical and Computational Thinking -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-mathematical-computational-thinking" onchange="displayCourses()">
                        <label>Mathematical and Computational Thinking</label>
                    </section>

                    <!-- Filter for Written Communication -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-written-communication" onchange="displayCourses()">
                        <label>Written Communication</label>
                    </section>

                    <!-- Filter for Oral Communication -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-oral-communication" onchange="displayCourses()">
                        <label>Oral Communication</label>
                    </section>

                </fieldset>
                <fieldset>

                    <legend>Knowledge & Inquiry</legend>

                    <!-- Filter for Philosophy, Literature, and Aesthetic -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-philosphy-literature-aesthetic" onchange="displayCourses()">
                        <label>Philosophy, Literature, and Aesthetic</label>
                    </section>
                    
                    <!-- Filter for Natural Science Inquiry -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-natural-science-inquiry" onchange="displayCourses()">
                        <label>Natural Science Inquiry</label>
                    </section>

                    <!-- Filter for Historical, Behavioral, and Social Science -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-historical-behavioral-social-science" onchange="displayCourses()">
                        <label>Historical, Behavioral, and Social Science</label>
                    </section>

                </fieldset>
                <fieldset>

                    <legend>Personal & Social Responsibility</legend>

                    <!-- Filter for Global Awareness & Citizenship -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-global-awareness-citizenship" onchange="displayCourses()">
                        <label>Global Awareness & Citizenship</label>
                    </section>

                    <!-- Filter for Wellness -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration" id="checkbox-wellness" onchange="displayCourses()">
                        <label>Wellness</label>
                    </section>

                </fieldset>
            </form>
            <section class="container">
                <h1>AVAILABLE CLASSES</h1>
                <section id="courses">

                    <!--
                    <section id="comp100" class="dropdown-box">
                        <header>
                            <button onclick="toggleContent('comp100')">
                                <img class="icon" src="/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg">
                                COMP100 Intro to Computers
                            </button>
                            <button class="positive">Add</button>
                        </header>
                        <article>
                            <h1>Course Description</h1>
                            <p>Example description text.</p>
                            <h1>Prerequisites</h1>
                            <p>None</p>
                        </article>
                    </section>
                    -->

                   
                </section>
            </section>
            
            <section class="container">
                <h1>MY SCHEDULE</h1>
                <section id="schedule-comp400" class="dropdown-box">
                    <header>
                        <button onclick="toggleContent('schedule-comp400')">
                            <img class="icon" src="/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg">
                            COMP100 Intro to Computers
                        </button>
                        <button class="negative">Remove</button>
                    </header>
                    <article>
                        <h1>Course Description</h1>
                        <p>Example description text.</p>
                        <h1>Prerequisites</h1>
                        <p>None</p>
                    </article>
                </section>
            </section>

        </main>
    </body>
</html>