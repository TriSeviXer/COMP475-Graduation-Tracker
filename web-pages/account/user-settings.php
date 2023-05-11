<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Graduation Tracker</title>
        <link rel="Stylesheet" type="text/css" href="../../resources/utilities/styles/grad-tracker.css">
        <script src="../../resources/utilities/scripts/grad-script.js" defer></script>
    </head>
    <body>
        <?php
            include '../../resources/utilities/includes/navigation.inc.php';
        ?>
        <header>
            <h1>Profile Settings</h1>
        </header>
        <main class="selection">
            <section class="container">
                <h1>MY SETTINGS</h1>
                <p>Some settings may not be available yet.</p>
                <button>Change Profile Image</button>
                <button>Change Email</button>
                <button>Change Password</button>
                <button>Delete Account</button>
            </section>
    </body>
<html>