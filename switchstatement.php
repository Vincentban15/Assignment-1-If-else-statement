<?php
// Vincent Ban Baylon
if (isset($_POST['level'])) {
    $level = $_POST['level'];

    switch ($level) {
        case "easy":
            echo "EASY mode. Enemies are weak.";
            break;
        case "medium":
            echo "MEDIUM mode. Balanced challenge.";
            break;
        case "hard":
            echo "HARD mode. Enemies are strong!";
            break;
        default:
            echo "Invalid level. Choose easy, medium, or hard.";
    }
}
?>

<form method="post">
    Enter game level (easy, medium, hard): 
    <input type="text" name="level">
    <input type="submit" value="Play">
</form>