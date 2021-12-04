<?php
session_start();
?>
<html>

<body>
    <?php
    $username = $_POST['username']; // collect value of input field
    $password = $_POST['password'];  // collect value of input field
    if (empty($username) || ($password != "test")) { //Authentication fail case:
        echo "<h1>Login failed. Name is empty or Username/password does not match! </h1>";
        echo "<p>Please <a href=\"login.html\">click here if you are not redirected in 3 sec.</a></p>";
        echo "<meta http-equiv='refresh' content='3;login.html' />";
    } else {     //$username is not empty and $password=="test" --> This case, we consider →passed authentication.
        $newusername = filter_var($username, FILTER_SANITIZE_STRING); //one way to clean some garbage 
        $_SESSION["uID"] = $newusername; // Set a SESSION variable 
        echo "<h1>Login Successful! </h1>";
        echo "Session variables are set.";
        echo "<p>Please <a href=\"session_index.php\">click here if you are not redirected in 3 sec.</a></p>";
        echo "<meta http-equiv='refresh' content='3;session_index.php' />";
    }
    ?>
    <p>Click <a href="session_index.php">Here </a> to go to Homepage.</p>
</body>

</html>