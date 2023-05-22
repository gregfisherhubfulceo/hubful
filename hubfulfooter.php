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
        $subject = "Thank you for subscribing HUBFUL.COM!";
        $message = "Thank you for subscribing to our newsletter! \n  we will contact shortly.";
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/footers.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet" />
    <title>footer</title>
</head>

<body>
    <div class="footer">
        <div class="footer-inner-section">
            <div class="footer-img">
                <a href="index.php"> <img src="./images/hubful-logo.png" alt="" /></a>
            </div>
            <div class="hubful-platform">
                <header>HubFul Platform</header>
                <ul class="mega-links">
                    <li><a href="#">HubFul Mall</a></li>
                    <li><a href="#">HubFul Hubs</a></li>
                    <li><a href="#">hubFul Biz Hubs</a>/li>
                    <li><a href="#">HubFul Ads</a></li>
                    <li><a href="#">HubFul Invest</a></li>
                </ul>
            </div>
            <div class="hubful-platform">
                <header>Social Commerce</header>
                <ul class="mega-links">
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">How To's Costumer Service</a></li>
                </ul>
            </div>
            <div class="hubful-platform">
                <header>HubFul, the Company</header>
                <ul class="mega-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Costumers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-section2">
            <div class="footer-section2-first">
                <h3>Subscribe</h3>
                <!--<div class="footer-input">-->
                <!--  <input-->
                <!--    type="text"-->
                <!--    placeholder="Email Address"-->
                <!--    class="footer-input-text"-->
                <!--  />-->
                <!-- <a href="#"><i class="fa-solid fa-arrow-right arrow"></i></a>-->
                <!--</div>-->
                <form method="post" action="">
                    <div class="footer-input">
                        <input type="email" name="email" placeholder="Email Address" class="footer-input-text" required />
                        <button type="submit"><i class="fa-solid fa-arrow-right arrow"></i></button>
                    </div>
                </form>
                <p>
                    Here at HubFul, We're All Family! No Matter where your live, what
                    you believe, our what opinion is, we are family! The HubFul Family.
                </p>
            </div>
            <div class="footer-section2-second">
                <p>©2022 HubFul.com Corp. All rights reserved.</p>
                <hr />
                <div class="footer-section2-secondlinks">
                    <ul class="footer-section2-ul">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                    <div class="footer-section2-icons">
                        <a href="https://www.linkedin.com/company/hubfulcom"><i class="fa-brands fa-linkedin links"></i></a>

                        <a href="https://www.facebook.com/hubful"><i class="fa-brands fa-facebook links"></i></a>
                        <a href="https://twitter.com/gfishhubfulceo"> <i class="fa-brands fa-twitter links"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php
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
                $subject = "Thank you for subscribing HUBFUL.COM!";
                $message = "Thank you for subscribing to our newsletter! \n  we will contact shortly.";
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
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/footers.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet" />
    <title>footer</title>
</head>

<body>
    <div class="footer">
        <div class="footer-inner-section">
            <div class="footer-img">
                <a href="index.php"> <img src="./images/hubful-logo.png" alt="" /></a>
            </div>
            <div class="hubful-platform">
                <header>HubFul Platform</header>
                <ul class="mega-links">
                    <li><a href="#">HubFul Mall</a></li>
                    <li><a href="#">HubFul Hubs</a></li>
                    <li><a href="#">hubFul Biz Hubs</a>/li>
                    <li><a href="#">HubFul Ads</a></li>
                    <li><a href="#">HubFul Invest</a></li>
                </ul>
            </div>
            <div class="hubful-platform">
                <header>Social Commerce</header>
                <ul class="mega-links">
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">How To's Costumer Service</a></li>
                </ul>
            </div>
            <div class="hubful-platform">
                <header>HubFul, the Company</header>
                <ul class="mega-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Costumers</a></li>

                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-section2">
            <div class="footer-section2-first">
                <h3>Subscribe</h3>
                <!--<div class="footer-input">-->
                <!--  <input-->
                <!--    type="text"-->
                <!--    placeholder="Email Address"-->
                <!--    class="footer-input-text"-->
                <!--  />-->
                <!-- <a href="#"><i class="fa-solid fa-arrow-right arrow"></i></a>-->
                <!--</div>-->
                <form method="post" action="">
                    <div class="footer-input">
                        <input type="email" name="email" placeholder="Email Address" class="footer-input-text" required />
                        <button type="submit"><i class="fa-solid fa-arrow-right arrow"></i></button>
                    </div>
                </form>
                <p>
                    Here at HubFul, We're All Family! No Matter where your live, what
                    you believe, our what opinion is, we are family! The HubFul Family.
                </p>
            </div>
            <div class="footer-section2-second">
                <p>©2022 HubFul.com Corp. All rights reserved.</p>
                <hr />
                <div class="footer-section2-secondlinks">
                    <ul class="footer-section2-ul">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                    <div class="footer-section2-icons">
                        <a href="https://www.linkedin.com/company/hubfulcom"><i class="fa-brands fa-linkedin links"></i></a>

                        <a href="https://www.facebook.com/hubful"><i class="fa-brands fa-facebook links"></i></a>
                        <a href="https://twitter.com/gfishhubfulceo"> <i class="fa-brands fa-twitter links"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>