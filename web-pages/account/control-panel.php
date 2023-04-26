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
                <!-- Heading for Tracking -->
                <h1>MAJOR TRACKING</h1>
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
                <button class="positive">Add Major</button>
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
                        <button class="positive">Edit</button>
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
                        <button class="positive">Edit</button>
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
                <button class="positive">Add Schedule</button>
                <section id="add-schedule" class="dropdown-box">
                    <header class="positive">
                        <button onclick="toggleContent('add-schedule')">New Schedule</button>
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
            </section>
        </main>
        <footer>

        </footer>
    </body>
<html>