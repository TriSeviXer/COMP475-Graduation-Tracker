<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Graduation Tracker</title>
        <link rel="Stylesheet" type="text/css" href="../resources/utilities/styles/grad-tracker.css">
        <script src="../resources/utilities/scripts/grad-script.js" defer></script>
    </head>
    <body>
        <?php
            include '../resources/utilities/includes/navigation.inc.php';
        ?>
		<header>
		    <h1>About</h1>
		</header>
        <main class="selection">
            <section class="container">
                <h1>Graduation Tracker</h1>
                <section>
                    <h2>Our Mission</h2>
                    <p>
                        Welcome to our Graduation Tracker! This handy tool will 
                        automatically track which classes are required to be taken for your given major. 
                        It will also list the prerequistes for each class as well.
                        Sign up or Login to get started!
                    </p>
                    <h2>Features</h2>
                    <ul>
                        <li>Tracking Majors</li>
                        <li>Creating Schedules</li>
                        <li>Adding and Removing Courses</li>
                    </ul>
                </section>
                
            </section>
            <section class="container">
                <h1>Meet The Team</h1>
                <section>
                    <h2>Austin </h2>
                    <p>Database Management<p>
                    <h2>Erick</h2>
                    <p>Back End<p>
                    <h2>Michael</h2>
                    <p>Front End & Version Control<p>
                    <h2>Zach </h2>
                    <p>Documentation<p>
                </section>
            </section>
		</main>
        <footer>

        </footer>
    </body>
</html>