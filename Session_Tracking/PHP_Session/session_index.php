<?php
session_start();
?>
<html>

<head>
    <title>my project</title>
</head>

<body>
    <h1>Welcome to PHP Session Home-page!!!</h1>
    <?php
    if (($_SESSION["uID"] != "") && ($_SESSION["uID"] != "Guest")) {   //Logged in
        echo "Login: " . $_SESSION["uID"] . "                " . "<a href='logout.php'>Logout</a>";
    } else { //Before Authentication or Authentication fail case:
        echo "Login:Guest";
        $_SESSION["uID"] = "Guest";
    }
    ?><p><b>Click Below to see more stuff.</b></p>
    <p><a href="login.html ">Login </a> </p>
    <p><a href="food_business.php">My Food</a> </p>
    <footer>&copy; 2020,MTC CIT1200</footer>
</body>

</html>