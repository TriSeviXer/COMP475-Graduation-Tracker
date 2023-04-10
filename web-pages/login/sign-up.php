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

            <!-- Form for creating a new account. -->
            <!-- Post method allows for secure data transfer through the form -->
            <form action="../../resources/utilities/includes/sign-up.inc.php" method="post">

                <!-- First form asking for type of signup.-->
                <fieldset id="f0">
                    <h1>Sign Up</h1>
                    <p>
                        Welcome to Common Wealth University Graduation Tracker.
                        Please select a signup option.
                    </p>                    
                
                    <!-- Form Navigation -->
                    <section>
                        <button class="positive" type="button" onclick="nextForm('f0', 'f1a')">Use Email</button>
                        <p> OR </p>
                        <button class="positive" type="button" onclick="nextForm('f0', 'f1b')">Use ID</button>
                    </section>

                </fieldset>

                <!-- For signing up with an school email. -->
                <fieldset id="f1a" style="display: none;">
                    
                    <legend>Student Information</legend>
                    
                    <!-- Ask for a school email address. -->
                    <label>Email Address*</label>
                    <input type="text" name="email" placeholder="username@school.edu" size="32"> 
                    
                    <!-- Form Navigation -->
                    <section class="right-align">
                        <button class="neutral" type="button" onclick="prevForm('f1a')">Back</button>
                        <button class="positive" type="button" onclick="nextForm('f1a', 'f2a')">Next</button>
                    </section>

                </fieldset>

                <!-- For signing up with a school id.-->
                <fieldset id="f1b" style="display: none;">
                    
                    <legend>Student Information</legend>

                    <!-- Ask for campus for the student id. -->
                    <label>Campus*</label>
                    <select name="campus">
                        <option value="">Select an option...</option>
                        <option value="bloomsburg">Bloomsburg</option>
                        <option value="lock haven">Lock Haven</option>
                        <option value="mansfield">Mansfield</option>
                    </select>
                    
                    <!-- Ask for student id. -->
                    <label>Student ID*</label>
                    <input type="text" name="studentID" placeholder="ex. 1234.." size="6" >
          
                    <!-- Form Navigation -->
                    <section class="right-align" required>
                        <button class="neutral" type="button" onclick="prevForm('f1b')">Back</button>
                        <button class="positive" type="button" onclick="nextForm('f1b', 'f2a')">Next</button>
                    </section>

                </fieldset>
           

                <!-- Second form asking for personal information. -->
                <fieldset id="f2a" style="display: none;">

                    <legend>Personal Information</legend>

                    <!-- Ask for a first name. -->
                    <label>First Name</label>
                    <input type="text" name="firstName" size="32">

                    <!-- Ask for a last name. -->
                    <label>Last Name</label>
                    <input type="text" name="lastName" size="32">

                    <!-- Form Navigation -->
                    <section class="right-align">
                        <button class="neutral" type="button" onclick="prevForm('f2a')">Back</button>
                        <button class="positive" type="button" onclick="nextForm('f2a', 'f3a')">Next</button>
                    </section>

                </fieldset>

                <!-- Third form asking for a password. -->
                <fieldset id="f3a" style="display: none;">

                    <legend>Password</legend>

                    <!-- Ask for a new password. -->
                    <label>Create Password*</label>
                    <input type="password" name="password" size="32" required>

                    <!-- Confirm new password. -->
                    <label>Confirm Password*</label>
                    <input type="password" name="confirmedPassword" size="32" required>

                    <!-- Password strength check. -->
                    <label>Password Strength</label>
                    <meter min="0" max="5" low="1" optimum="3" high="4" value="0"></meter> 
                    
                    <!-- Form Navigation -->
                    <section class="right-align">
                        <button class="neutral" type="button" onclick="prevForm('f3a')">Back</button>
                        <button class="positive" type="submit" name="submit">submit</button>
                    </section>
                </fieldset>

                <?php
                //error handling for sign-up

                    //read the url
                    //if "sign-up" is after ?...
                    if (isset($_GET["sign-up"])) {
                        //if "sign-up" = "emptyInput"
                        if ($_GET["sign-up"] == "emptyInput"){
                            echo "<p>Fill in all fields!</p>";
                        }
                        else if ($_GET["sign-up"] == "invalidEmail"){
                            echo "<p>Invalid Email Address!</p>";
                        }
                        else if ($_GET["sign-up"] == "emailIsTaken"){
                            echo "<p>Email is already taken!</p>";
                        }
                        else if ($_GET["sign-up"] == "passwordsDoNotMatch"){
                            echo "<p>PasswordsDoNotMatch</p>";
                        }
                        else if ($_GET["sign-up"] == "emptyInput"){
                            echo "<p>Fill in all fields!</p>";
                        }
                    }
                    //if "error" is after ?...
                    else if (isset($_GET["error"])){
                        //if "error" = "stmt"
                        if ($_GET["error"] == "preparedStatementFailed"){
                            echo "<p>Error! Please try again!</p>";
                        }
                        //if "error" = "stmt"
                        if ($_GET["error"] == "didNotComeFromSubmit"){
                            echo "<p>Please continue Correctly!!</p>";
                        }
                    }
                ?>
                
            </form>

            

        </main>
        <footer>

        </footer>
    </body>
</html>