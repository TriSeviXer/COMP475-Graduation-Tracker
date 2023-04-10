<?php

session_start();
session_unset();
session_destroy();

header("location: /COMP475-Graduation-Tracker/web-pages/index.php?logout=sucess");
exit();