<?php
// Vincent Ban Baylon
if (isset($_POST['grade'])) {
    $grade = $_POST['grade'];

    if ($grade >= 90) {
        echo "Excellent!";
    } elseif ($grade >= 75) {
        echo "Good job!";
    } else {
        echo "You failed.";
    }
}
?>

<form method="post">
    Enter your grade: <input type="number" name="grade" required>
    <button type="submit">Check</button>
</form>