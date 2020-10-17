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
    <link href="../css/browse-style.css" type="text/css" rel="stylesheet">
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
        <a class="active" href="browse.php">Browse</a>
        <a href="account.php">Account</a>
        <a href="help.php">Help</a>
        <a href="action-logout.php">Logout</a>
    </div>
    <!--content-->
    <div class="content">
        <div class="content1">
            <div class="content1-box">
                <input type="text" id="search-keyword" name="search-keyword" placeholder="Search job or company..">
            </div>
        </div>
        <div class="content2">
            <div class="content2-title">
                <h2>Job by Specialization</h2>
            </div>
            <div class="content2-grid">
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Accounting</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Admin</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Arts/Media</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Communication</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Building</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Computer</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Education</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Engineering</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Healthcare</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Hotel</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Restaurant</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Sales/Marketing</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Science</a>
                </div>
                <div class="content2-grid-item">
                    <a href="#" class="content2-grid-item-text">Services</a>
                </div>
            </div>
        </div>
        <div class="content3">
            <div class="content3-title">
                <h2>Job List</h2>
            </div>
            <div class="content3-job">
                <div class="content3-job-grid">
                    <div class="job-post-date">
                        <p class="job-post-date-text">Posted on May,5 2020</p>
                    </div>
                    <div class="job-title">
                        <h4><a href="#" class="job-title-text">UI Developer</a></h4>
                    </div>
                    <div class="job-attribute">
                        <p>Company name</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p><a href="#" class="job-company-name-desc-text">Z</a></p>
                    </div>
                    <div class="job-attribute">
                        <p>Salary</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>$3000 - $5000</p>
                    </div>
                    <div class="job-attribute">
                        <p>Recomended level</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>2.5 stars above</p>
                    </div>
                    <div class="job-attribute">
                        <p>Quota</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>3</p>
                    </div>
                    <div class="job-attribute">
                        <p>Due date</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>May, 25 2020</p>
                    </div>
                </div>
                <div class="content3-job-grid">
                    <div class="job-post-date">
                        <p class="job-post-date-text">Posted on May,5 2020</p>
                    </div>
                    <div class="job-title">
                        <h4><a href="#" class="job-title-text">UI Developer</a></h4>
                    </div>
                    <div class="job-attribute">
                        <p>Company name</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p><a href="#" class="job-company-name-desc-text">Z</a></p>
                    </div>
                    <div class="job-attribute">
                        <p>Salary</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>$3000 - $5000</p>
                    </div>
                    <div class="job-attribute">
                        <p>Recomended level</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>2.5 stars above</p>
                    </div>
                    <div class="job-attribute">
                        <p>Quota</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>3</p>
                    </div>
                    <div class="job-attribute">
                        <p>Due date</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>May, 25 2020</p>
                    </div>
                </div>
                <div class="content3-job-grid">
                    <div class="job-post-date">
                        <p class="job-post-date-text">Posted on May,5 2020</p>
                    </div>
                    <div class="job-title">
                        <h4><a href="#" class="job-title-text">UI Developer</a></h4>
                    </div>
                    <div class="job-attribute">
                        <p>Company name</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p><a href="#" class="job-company-name-desc-text">Z</a></p>
                    </div>
                    <div class="job-attribute">
                        <p>Salary</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>$3000 - $5000</p>
                    </div>
                    <div class="job-attribute">
                        <p>Recomended level</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>2.5 stars above</p>
                    </div>
                    <div class="job-attribute">
                        <p>Quota</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>3</p>
                    </div>
                    <div class="job-attribute">
                        <p>Due date</p>
                    </div>
                    <div class="job-divider">
                        <p>:</p>
                    </div>
                    <div class="job-attribute-desc">
                        <p>May, 25 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-footer">
            <p class="content-footer-text"><a class="content-footer-link" href="home.php">Job.In</a> © 2020</p>
        </div>
    </div>
</body>

</html>