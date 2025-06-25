<?php
// Save this as register.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // secure hash

    $userData = "$username,$email,$password\n";

    // Append user to file (like a simple database)
    file_put_contents("users.txt", $userData, FILE_APPEND);

    echo "<h2 style='text-align:center;color:green;'>Account Created Successfully!</h2>";
    echo "<p style='text-align:center;'><a href='login.html'>Click here to Login</a></p>";
}
?>
