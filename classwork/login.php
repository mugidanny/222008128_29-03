<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving the submitted data from the login form
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Redirecting to the welcome page
    header("Location: welcome.php?username=" . urlencode($username) . "&email=" . urlencode($email));
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Submit">
        <input type="reset" value="Cancel">
    </form>
</body>
</html>
