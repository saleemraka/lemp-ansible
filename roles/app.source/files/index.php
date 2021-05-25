<html>
<head>
    <h3>LEMP Stack Test</h3>
</head>
    <body>
    <?php  echo '<p>Welcome to LEMP by Ansible </p>';
 
    // Define PHP variables for the MySQL connection.
    $servername = "localhost";
    $username = "appDbUser";
    $password = "super secet user password";
    // Create a MySQL connection.
    $conn = mysqli_connect($servername, $username, $password);

    // Report if the connection fails or is successful.
    if (!$conn) {
        exit('<p>Your connection has failed.<p>' .  mysqli_connect_error());
    }
    echo '<p>You have connected successfully.</p>';
    ?>
</body>
</html>
