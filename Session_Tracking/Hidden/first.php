<!DOCTYPE html>
<html>

<body>
    <h1>A Hidden Field 1</h1>
    <form action="second.php" method="post"><label for="fname">First name:</label><input type="text" id="fname" name="fname">
    <br><br>
    <label for="first_number">First Number:</label>
    <input type="text" id="first_number" name="first_number">
    <br><br>
    <input type="submit" value="Submit"></form>
    <p><strong>Note:</strong> The hidden field is not shown to the user, but the data is sent when the form is submitted.</p>
</body>

</html>