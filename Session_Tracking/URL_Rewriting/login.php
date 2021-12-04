<html>

<body>
    <?php  // collect value of input field
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username) || ($password != "test")) {  #failed authentication because of blank username.
            echo "<h1>Sorry, Login Failed.</h1>";
            echo "Go back and check your Name and password. <br>";
            $newusername = "Guest";         #means not passed authentication.
            echo "<meta http-equiv='refresh' content='2;login.html' />";  #will go back to login.html in 2 seconds.
        } else { #this is the case users passed authentication.
            $newusername = filter_var($username, FILTER_SANITIZE_STRING);   //one way to clean some garbage
            echo "<h1>Login Successful</h1>";
            echo "You are logged in as $newusername.";
            echo "<meta http-equiv='refresh' content='2;URL_rewriting_index.php?username=$newusername' />";
        }
        echo "<p>In 2 seconds, it will move to next page automatically. If not click below links.</p>";
        echo "<p>Click <a href='login.html'> Here </a> to Login page.</p>";
        echo "<a href='URL_rewriting_index.php?username=$newusername'>Click here to go to Homepage.</a>"; //Look at below line.  You may use & to add more variables to pass.
        //echo "<a href='URL_rewriting_index.php?college1=college1&college2=$college2&college3=$college3'>"
        ?>
    <p>Thank you.</p>
</body>

</html>