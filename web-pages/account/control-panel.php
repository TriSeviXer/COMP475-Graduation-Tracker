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
            <div class="container">
                <h1>MAJOR TRACKING</h1>
                <div id="comp400" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('comp400')">
                            <img src="/resources/images/icons/icon-dropdown.svg">
                            BS Computer Science
                        </button>
                        <button class="negative">Remove</button>
                        <button class="nutural">View</button>
                    </div>
                    <div class="course-dropdown">
                        <h1>Major Description</h1>
                        <p>Example major description.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <h1>MY SCHEDULES</h1>
                
                <div id="fall-2023" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('fall-2023')">Fall 2023</button>
                        <button class="negative">Remove</button>
                        <button class="positive">Edit</button>
                    </div>
                    <div class="course-dropdown">
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
                    </div>
                </div>
                <div id="spring-2024" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('spring-2024')">Spring 2024</button>
                        <button class="negative">Remove</button>
                        <button class="positive">Edit</button>
                    </div>
                    <div class="course-dropdown">
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
                    </div>
                </div>
                <div id="add-schedule" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('add-schedule')">New Schedule</button>
                    </div>
                    <div class="course-dropdown">
                        <select name="Semester">
                            <option>Fall</option>
                            <option>Winter</option>
                            <option>Spring</option>
                            <option>Summer</option>
                        </select>
                        <input type="number" min="2023" max="2053" step="1" value="2023">
                        <button class="positive">Add</button>
                    </div>
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </body>
<html>