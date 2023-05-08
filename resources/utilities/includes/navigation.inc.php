<nav>
    <a href="/COMP475-Graduation-Tracker/web-pages/index.php">Home</a>
    <a href="/COMP475-Graduation-Tracker/web-pages/about.php">About</a>
    <?php
        if (isset($_SESSION["user_id"])){
            echo '<a href="/COMP475-Graduation-Tracker/web-pages/account/control-panel.php">Schedule</a>';
            echo '<a href="/COMP475-Graduation-Tracker/resources/utilities/includes/logout.inc.php">Log Out</a>';
        }
        else{
            echo '<a href="/COMP475-Graduation-Tracker/web-pages/login/login.php">Login</a>';
            echo '<a class="positive" href="/COMP475-Graduation-Tracker/web-pages/login/sign-up.php">Sign-up</a>';
        }
    ?>
</nav>