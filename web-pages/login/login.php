<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Graduation Tracker</title>
        <link rel="Stylesheet" type="text/css" href="../../resources/utilities/styles/grad-tracker.css">
        <script src="../../resources/utilities/scripts/grad-script.js" defer></script>
    </head>
    <body>
        <nav>
            <a href="../index.php">Home</a>
            <a href="../about.php">About</a>
            <a href="login.php">Login</a>
			<a class="positive" href="sign-up.php">Sign-up</a>
        </nav>
        <main>
            <form action="../../resources/utilities/includes/login.inc.php" method="post">
                <fieldset>

                    <h1>Student Login</h1>

                    <!-- Ask for email. -->
                    <label>Email Address*</label>
                    <input type="email" name="email" placeholder="username@school.edu" size="32" required>

                    <!-- Ask for password.-->
                    <label>Password*</label>
                    <input type="password" name="password" size="32" required>

                    <!-- Link to a recovery page.-->
                    <a href="recovery.php">Forgot password...</a>

                    <!-- Confirmation to log into the system. -->
                    <section class="right-align">
                        <button class="positive" type="submit" name="submit">Login</button>
                    </section>

                </fieldset>
                <?php
                //error handling for sign-up

                    //read the url
                    //if "sign-up" is after ?...
                    if (isset($_GET["login"])) {
                        //if "sign-up" = "emptyInput"
                        if ($_GET["login"] == "emptyInput"){
                            echo "<p>Fill in all fields!</p>";
                        }
                        else if ($_GET["login"] == "incorrectLogin"){
                            echo "<p>Incorrect Email or Password!</p>";
                        }
                    }
                ?>
            </form>
        </main>
    </body>
</html>