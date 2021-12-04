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
    <p>Click <a href="cookie_base.php">Here </a>to go back to previous page.</p>
</body>

</html>