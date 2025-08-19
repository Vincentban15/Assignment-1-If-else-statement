<?php
//Vincent Ban Baylon
if (isset($_POST['number'])) {
    $num = $_POST['number'];

    if ($num > 0) {
        echo "The number $num is positive.";
    }
}
?>

<form method="post">
    Enter a number: <input type="number" name="number" required>
    <button type="submit">Check</button>
</form>