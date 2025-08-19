<?php
// Vincent Ban Baylon
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    if ($username == "admin") {
        echo "Welcome, Admin!";
    } else {
        echo "Access Denied. Try again.";
    }
}
?>

<form method="post">
    Enter username: <input type="text" name="username" required>
    <button type="submit">Login</button>
</form>