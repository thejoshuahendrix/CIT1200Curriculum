<html>

<head>
    <title>URL_rewriting</title>
</head>

<body>
    <h1>URL_rewritingexample Homepage!!!</h1>
    <?php
    $username = $_GET["username"];
    if (empty($username) || ($username == "Guest")) {
        $username = "Guest";
        echo "NOT logedin properly.";
        echo "<p><a href='login.html'>Click here To Login</a></p>";
    } else {
        echo "Logged in properly."; //To logout, just connect by itself with username=Guest.
        echo "<p><a href='URL_rewriting_index.php?username=Guest'>Click here To Logout.</a></p>";
    }
    echo "You are logged in as $username."; 
    ?>
    <p><b>Click Below to see more stuff.</b></p>
    <?php
    echo "<p><a href='food_business.php?username=$username'>Click here To see Food_Business.</a></p>";
    ?>
    <footer>&copy; 2020,Mtc CIT1200</footer>
</body>

</html>