<?php

session_start();

// establish database connection
$conn = mysqli_connect('localhost', 'hubfgshh_root', 'tNj(,#BIFyBA', 'hubfgshh_hubful') or die('connection failed check db');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password are valid
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect to congrats.php
        header('Location: congrats.php');
        exit;
    } else {
        // If the email or password are invalid, display an error message
        echo "Invalid email or password.";
    }
}

// Close the database connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>login</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="form-container">

        <form action="" method="post" enctype="multipart/form-data">
            <h2>Login</h2>
            <input type="email" name="email" id="email" placeholder="Email:" class="form-control rounded-0" value="" autofocus required><br>
            <input type="password" name="password" id="password" class="form-control rounded-0" value="" required>
            <input type="submit" value="Login" name="submit" class="btn">
        </form>
        <div>
            <h2 class="login-link">Are you new user? <a href="./signup.php"><strong class="login-a">Register First</strong></a></h2>
        </div>

    </div>

</body>

</html>