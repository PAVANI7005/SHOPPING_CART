<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    if (!file_exists("users.txt")) {
        echo "<h2 style='color:red; text-align:center;'>No registered users yet!</h2>";
        exit;
    }

    $users = file("users.txt");

    foreach ($users as $user) {
        list($savedUser, $savedEmail, $savedHash) = explode(",", trim($user));
        if ($savedUser === $username && password_verify($password, $savedHash)) {
            echo "<h2 style='text-align:center;color:green;'>Login Successful!</h2>";
            echo "<p style='text-align:center;'><a href='catalog.html'>Go to Product Catalog</a></p>";
            exit;
        }
    }

    echo "<h2 style='text-align:center;color:red;'>Invalid username or password!</h2>";
    echo "<p style='text-align:center;'><a href='login.html'>Try Again</a></p>";
}
?>
