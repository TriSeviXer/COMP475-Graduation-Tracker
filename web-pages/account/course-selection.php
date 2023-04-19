<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Graduation Tracker</title>
        <link rel="Stylesheet" type="text/css" href="../../resources/utilities/styles/grad-tracker.css">
        <script src="../../resources/utilities/scripts/grad-script.js" defer></script>
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

                    <legend>Tracks</legend>

                    <section class="left-align">
                        <input type="checkbox" name="all">
                        <label>All</label>
                    </section>

                    <!-- Filter for Major Related -->
                    <section class="left-align">
                        <input type="checkbox" name="major">
                        <label>Major</label>
                    </section>

                    <!-- Filter for Minor Related -->
                    <section class="left-align">
                        <input type="checkbox" name="minor">
                        <label>Minor</label>
                    </section>

                    <!-- Filter for Concentration Related -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Concentration</label>
                    </section>

                </fieldset>
                <fieldset>
                    
                    <legend>Intellectual Foundation</legend>

                    <!-- Filter for Mathematical and Computational Thinking -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Mathematical and Computational Thinking</label>
                    </section>

                    <!-- Filter for Written Communication -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Written Communication</label>
                    </section>

                    <!-- Filter for Critical Thinking -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Critical Thinking</label>
                    </section>

                    <!-- Filter for Oral Communication -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Oral Communication</label>
                    </section>

                </fieldset>
                <fieldset>

                    <legend>Knowledge & Inquiry</legend>

                    <!-- Filter for Philosophy, Literature, and Aesthetic -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Philosophy, Literature, and Aesthetic</label>
                    </section>
                    
                    <!-- Filter for Natural Science Inquiry -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Natural Science Inquiry</label>
                    </section>

                    <!-- Filter for Historical, Behavioral, and Social Science -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Historical, Behavioral, and Social Science</label>
                    </section>

                </fieldset>
                <fieldset>

                    <legend>Personal & Social Responsibility</legend>

                    <!-- Filter for Global Awareness & Citizenship -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Global Awareness & Citizenship</label>
                    </section>

                    <!-- Filter for Wellness -->
                    <section class="left-align">
                        <input type="checkbox" name="concentration">
                        <label>Wellness</label>
                    </section>

                </fieldset>
            </form>
            <div class="container">
                <h1>AVAILABLE CLASSES</h1>
                <div id="comp100" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('comp100')">COMP100 Intro to Computers</button>
                        <button class="positive">Add</button>
                    </div>
                    <div class="course-dropdown">
                        <h1>Course Description</h1>
                        <p>Example description text.</p>
                        <h1>Prerequisites</h1>
                        <p>None</p>
                    </div>
                </div>
                <div id="comp200" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('comp200')">COMP100 Intro to Computers</button>
                        <button class="positive">Add</button>
                    </div>
                    <div class="course-dropdown">
                        <h1>Course Description</h1>
                        <p>Example description text.</p>
                        <h1>Prerequisites</h1>
                        <p>None</p>
                    </div>
                </div>
                <div id="comp300" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('comp300')">COMP100 Intro to Computers</button>
                        <button class="positive">Add</button>
                    </div>
                    <div class="course-dropdown">
                        <h1>Course Description</h1>
                        <p>Example description text.</p>
                        <h1>Prerequisites</h1>
                        <p>None</p>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <h1>MY SCHEDULE</h1>
                <div id="comp400" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('comp400')">COMP100 Intro to Computers</button>
                        <button class="negative">Remove</button>
                    </div>
                    <div class="course-dropdown">
                        <h1>Course Description</h1>
                        <p>Example description text.</p>
                        <h1>Prerequisites</h1>
                        <p>None</p>
                    </div>
                </div>
            </div>
            
        </main>
    </body>
</html>