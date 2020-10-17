<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<!--head section-->

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/help-style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../image/favicon.jpg">
    <title>Job.In</title>
</head>

<!--body section-->

<body>
    <!--navbar-->
    <div class="navbar sticky-top navbar-light">
        <a class="navbar-brand" href="home.php">
            <h1 class="page-title-job">Job<span class="page-title-in">.In</span></h1>
        </a>
    </div>
    <!--sidebar-->
    <div class="sidebar">
        <div class="sidebar-profile">
            <img src="../image/usericon.jpg" class="sidebar-profile-image">
            <p class="sidebar-profile-name"><?php echo $_SESSION['user_fname'] ?></p>
        </div>
        <a href="home.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="browse.php">Browse</a>
        <a href="account.php">Account</a>
        <a class="active" href="help.php">Help</a>
        <a href="action-logout.php">Logout</a>
    </div>
    <!--content-->
    <div class="content">
        <div class="content1">
            <div class="content1-title">
                <h2>Have something you want to know?</h2>
            </div>
            <div class="content1-text">
                <h5>Read Frequently Asked Question to find the answers</h5>
            </div>
            <a href="#">
                <div class="content1-box">
                    <h4 class="content1-box-text">Read FAQ</h4>
                </div>
            </a>
        </div>
        <div class="content2">
            <div class="content2-title">
                <h2>Have another question?</h2>
            </div>
            <div class="content2-text">
                <h5>Fill out the form below so we can find out your question</h5>
            </div>
            <div class="content2-box">
                <form action="#">
                    <label class="desc-text" for="fullname">Your Name</label>
                    <input type="text" id="fullname" placeholder="Your name..">
                    <label class="desc-text" for="email">Your Email</label>
                    <input type="text" id="email" placeholder="Your email..">
                    <label class="desc-text" for="prob-desc">Your Question</label>
                    <input type="text" id="prob-desc" placeholder="Define your question..">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="content-footer">
            <p class="content-footer-text"><a class="content-footer-link" href="home.php">Job.In</a> © 2020</p>
        </div>
    </div>
</body>

</html>