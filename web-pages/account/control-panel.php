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

        </header>
        <main class="selection">
            <div class="container">
                <h1>SCHEDULES</h1>
                <div id="comp400" class="course">
                    <div class="course-heading">
                        <button onclick="toggleContent('comp400')">Fall 2024</button>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </body>
<html>