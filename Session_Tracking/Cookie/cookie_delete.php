<!DOCTYPE html>
<?php
$cookie_name = "user"; // set the expiration date to one hour ago
setcookie($cookie_name, "", time() - 3600, "/");
?>
<html>

<body>
    <?php
    $cookie_name = "user";
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        echo "<br>Now, your cookie 'user' is deleted.";
    }
    ?>
    <p>Click <a href="cookie_base.php">Here </a>to go back to previous page.</p>
</body>

</html>