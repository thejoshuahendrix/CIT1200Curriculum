<!DOCTYPE html>
<html>

<body>
    <h1>A Hidden Field Last Page (look in source code)</h1>
    <?php
    $fname= $_POST['fname'];
    $first_number= $_POST['first_number'];
    $second_number= $_POST['second_number'];
    $third_number= $_POST['third_number'];
    $sum = $first_number+ $second_number+ $third_number;
    echo "<p>You name is $fname.  The sum of $first_number+ $second_number+  $third_number is $sum.</p>";
    ?>
    <p><strong>Note:</strong> The hidden field is not shown to the user, but the data is sent when the form is submitted.</p>
</body>

</html>