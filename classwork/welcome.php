<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php
    // Checking if the username and email parameters are set in the URL
    if(isset($_GET['username']) && isset($_GET['email'])) {
        // Retrieving the username and email from the URL parameters
        $username = $_GET['username'];
        // Extracting the username part from the email
        $email = $_GET['email'];
        $username_from_email = substr($email, 0, strpos($email, '@'));

        // Displaying the welcome message and email
        echo "<h2>Welcome, $username_from_email</h2>";
        echo "<p><strong>Login successful</strong></p>";
    } else {
        // If username or email parameters are not set, display an error message
        echo "<p>Error: Username or email not provided.</p>";
    }
    ?>
</body>
</html>
