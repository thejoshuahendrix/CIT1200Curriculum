<?php session_start();   ?><html>

<head>
    <title>my project</title>
</head>

<body>
    <h1>Welcome to Food Business PHP Session!!!</h1>
    <?php
    if (($_SESSION["uID"] != "") && ($_SESSION["uID"] != "Guest")) {
        echo "Login: " . $_SESSION["uID"] . "                " . "<a href='logout.php'>Logout</a>";
    } else {
        echo "Login:Guest";
        $_SESSION["uID"] = "Guest";
    }
    ?>
     <p><b>Click Below to see more stuff.</b></p>
    <p><a href="login.html ">Login/Change Profile</a> </p>
    <p><a href="session_index.php">Home page</a> </p>
    <footer>&copy; 2020,MTC CIT1200</footer>
</body>

</html>