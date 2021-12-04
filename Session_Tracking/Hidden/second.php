<!DOCTYPE html>
<html>

<body>
    <h1>A Hidden Field 2 (look in source code)</h1>
    <form action="third.php" method="post"><input type="hidden" value="<?php echo $_POST['fname']; ?>" name="fname" id="fname"><input type="hidden" value="<?php echo $_POST['first_number']; ?>" name="first_number" id="first_number"><label for="second_number">Second Number:</label><input type="text" name="second_number" id="second_number"><br><br><input type="submit" value="Submit"></form>
    <p><strong>Note:</strong> The hidden field is not shown to the user, but the data is sent when the form is submitted.</p>
</body>

</html>