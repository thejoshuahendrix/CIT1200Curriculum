<?php 
session_start(); 
?>
<html>
<body>
    <h1> See you!"</h1>
    <?php
    //$_SESSION["uID"]="Guest";
    session_unset(); // remove all session variable
    session_destroy();// destroy the session 
    echo "You are successfully logged out!";
    echo "<p>Please <a href=\"session_index.php\">click here if you are not redirected in 3 sec.</a></p>";
    echo "<meta http-equiv='refresh' content='3;session_index.php' />";
    ?>
    <p>Click <a href="session_index.php">Here </a> to go to Homepage.</p>
</body>

</html>