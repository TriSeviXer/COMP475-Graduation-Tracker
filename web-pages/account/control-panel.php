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
    </head>
    <body>
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
                    <img src="" alt="User profile.">
                    <figcaption>user@email.edu</figcaption>
                </figure>
                <button>Settings</button>
                <button>Help</button>
            </section>
            <section class="container">
                <!-- Heading for Tracking -->
                <h1>MY MAJORS</h1>
                <section id="comp400" class="dropdown-box">
                    <header>
                        <button onclick="toggleContent('comp400')">
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
                <button class="positive" onclick="toggleDialog('dialog-major')">Add Major</button>
            </section>
            <section class="container">
                
                <!-- Heading for Schedules -->
                <h1>MY SCHEDULES</h1>
                
                <section id="fall-2023" class="dropdown-box">
                    <header>
                        <button onclick="toggleContent('fall-2023')">
                            <img class="icon" src="/COMP475-Graduation-Tracker/resources/images/icons/icon-dropdown.svg">
                            Fall 2023
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
                                <tr>
                                    <td>COMP100</td>
                                    <td>Introduction to Computers<td>
                                </tr>
                                <tr>
                                    <td>COMP100</td>
                                    <td>Introduction to Computers<td>
                                </tr>
                                <tr>
                                    <td>COMP100</td>
                                    <td>Introduction to Computers<td>
                                </tr>
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
                                <tr>
                                    <td>COMP100</td>
                                    <td>Introduction to Computers<td>
                                </tr>
                                <tr>
                                    <td>COMP100</td>
                                    <td>Introduction to Computers<td>
                                </tr>
                                <tr>
                                    <td>COMP100</td>
                                    <td>Introduction to Computers<td>
                                </tr>
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
            <form>
                <h1>Add Schedule</h1>
                <fieldset>
                    <section>
                        <select name="Semester">
                            <option value="">Semester...</option>
                            <option value="Fall">Fall</option>
                            <option value="Winter">Winter</option>
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                        </select>
                        <input type="number" min="2023" max="2053" step="1" value="2023">
                    </section>
                    <section class="right-align">
                        <button class="negative" type="button" onclick="toggleDialog('dialog-schedule')">Cancel</button>
                        <button class="positive" type="button" onclick="window.location.href='/COMP475-Graduation-Tracker/web-pages/account/course-selection.php';">Add</button>
                    </section>
                </fieldset>
            </form>
        </section>

        <!-- Dialog box for adding majors. -->
        <section id="dialog-major" class="dialog collapsed">
            <form>
                <h1>Add Schedule</h1>
                <fieldset>
                    <section>
                        <select name="Major" >
                            <option value="">Major...</option>
                            <option value="BS-Computer-Science">BS Computer Science</option>
                        </select>
                    </section>
                    <section class="right-align">
                        <button class="negative" type="button" onclick="toggleDialog('dialog-major')">Cancel</button>
                        <button class="positive" type="button" onclick="toggleDialog('dialog-major')">Add</button>
                    </section>
                </fieldset>
            </form>
        </section>
    </body>
<html>