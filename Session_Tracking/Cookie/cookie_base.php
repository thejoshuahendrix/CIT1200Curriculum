<html>

<body>
    <?php
    $cookie_name = "user";
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
    <form action="cookies.php" method="post">userName: <input type="text" name="name"><br>
        Password: <input type="text" name="password">
        <br>Press submit button to setup your cookie.<input type="submit"></form>
    <p>Click <a href="cookie_delete.php">Here </a>to delete your cookies.</p>
    <p>Click <a href="cookie_second.php">Here </a>to go back to another page.</p>
</body>

</html>