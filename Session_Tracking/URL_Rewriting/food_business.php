<html>

<head>
    <title>My Food webpage</title>
</head>

<body>
    <h1>URL_rewritingexample My Food webpage!!!</h1>
    <?php
    $username = $_GET["username"];
    if (empty($username) || ($username == "Guest")) {
        $username = "Guest";
        echo "NOT logedin properly.";
        echo "<p><a href='login.html'>Click here To Login</a></p>";
    } else {
        echo "Logged in properly."; //To logout, just connect by itself with username=Guest.
        echo "<p><a href='food_business.php?username=Guest'>Click here To Logout.</a></p>";
    }
    echo "You are logged in as $username.";
    ?>
    <p><b>Click Below to see more stuff.</b></p>
    <?php
    echo "<p><a href='URL_rewriting_index.php?username=$username'>Click here To toSee Home page.</a></p>";
    ?>
    <footer>&copy; 2020,MTC CIT1200</footer>
</body>

</html>