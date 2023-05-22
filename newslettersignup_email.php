<?php
// Connect to the database
$servername = "localhost";
$username = "hubfgshh_root";
$password = "tNj(,#BIFyBA";
$dbname = "hubfgshh_hubful";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get email address from form input
  $email = $_POST["email"];

  // Insert email address into database
  $sql = "INSERT INTO subscribers (email, timestamp) VALUES ('$email', NOW())";
  if (mysqli_query($conn, $sql)) {
    // Send thank you email to subscriber
    $to = $email;
    $subject = "Thank you for subscribing to HubFul.com's Newsletter!";
    $message = "Thank you for subscribing to our newsletter! \n  We will reach out to you shortly. Enjoy the rest of your day or night.";
    $headers = "From: gregory.fisher@hubful.com\r\n";
    mail($to, $subject, $message, $headers);

    // Redirect to thank you page
    header("Location: index.php");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
