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
    <link href="../css/profile-style.css" type="text/css" rel="stylesheet">
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
        <a class="active" href="profile.php">Profile</a>
        <a href="browse.php">Browse</a>
        <a href="account.php">Account</a>
        <a href="help.php">Help</a>
        <a href="action-logout.php">Logout</a>
    </div>
    <!--content-->
    <div class="content">
        <div class="content1">
            <div class="content1-grid">
                <div class="content1-grid-item">
                    <div class="content1-grid-item-header">
                        <h4 class="content1-grid-item-text">Years of Employeed</h4>
                    </div>
                    <div class="content1-grid-item-body">
                        <h1 class="content1-years-employeed">2</h1>
                    </div>
                    <div class="content1-grid-item-footer">
                        <h4 class="content1-grid-item-text">Years</h4>
                    </div>
                </div>
                <div class="content1-grid-item">
                    <div class="content1-grid-item-header">
                        <h4 class="content1-grid-item-text">Your Level</h4>
                    </div>
                    <div class="content1-grid-item-body">
                        <img class="content1-star-level" src="../image/2-star.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="content2">
            <div class="content2-grid">
                <div class="content2-grid-item">
                    <p class="content2-attribute">Status</p>
                </div>
                <div class="content2-grid-item">
                    <p class="content2-divider">:</p>
                </div>
                <div class="content2-grid-item">
                    <p class="content2-attribute-status"><?php echo $_SESSION['user_job_status'] ?></p>
                </div>
            </div>
            <div class="content2-grid">
                <div class="content2-grid-item">
                    <p class="content2-attribute">Job</p>
                </div>
                <div class="content2-grid-item">
                    <p class="content2-divider">:</p>
                </div>
                <div class="content2-grid-item">
                    <p class="content2-attribute-status"><?php echo $_SESSION['user_highest_position'] ?></p>
                </div>
            </div>
            <div class="content2-grid">
                <div class="content2-grid-item">
                    <p class="content2-attribute">Education</p>
                </div>
                <div class="content2-grid-item">
                    <p class="content2-divider">:</p>
                </div>
                <div class="content2-grid-item">
                    <div class="content2-status-grid">
                        <p class="content2-attribute-status"><?php echo $_SESSION['user_education_title'] ?></p>
                        <a href="#">
                            <div class="content2-update-status">
                                <p class="content2-update-text">update</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content2-grid">
                <div class="content2-grid-item">
                    <p class="content2-attribute">Highest Position</p>
                </div>
                <div class="content2-grid-item">
                    <p class="content2-divider">:</p>
                </div>
                <div class="content2-grid-item">
                    <div class="content2-status-grid">
                        <p class="content2-attribute-status"><?php echo $_SESSION['user_highest_position'] ?></p>
                        <a href="#">
                            <div class="content2-update-status">
                                <p class="content2-update-text">update</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content3">
            <div class="content3-title">
                <h4>Portofolio</h4>
            </div>
            <div class="content3-grid">
                <div class="content3-grid-item">
                    <h5 class="content3-grid-item-title">Project</h5>
                    <div class="content3-grid-item-body">
                        <div class="content3-body-empty">
                            <p class="content3-body-empty-text">Have done a project?<br>record it!</p>
                        </div>
                    </div>
                    <a href="#">
                        <div class="content3-add-portofolio">
                            <p class="content3-add-portofolio-text">Add Project</p>
                        </div>
                    </a>
                </div>
                <div class="content3-grid-item">
                    <h5 class="content3-grid-item-title">Seminar</h5>
                    <div class="content3-grid-item-body">
                        <div class="content3-body-empty">
                            <p class="content3-body-empty-text">Have you ever attended a seminar?<br>save your seminar!
                            </p>
                        </div>
                    </div>
                    <a href="#">
                        <div class="content3-add-portofolio">
                            <p class="content3-add-portofolio-text">Add Seminar</p>
                        </div>
                    </a>
                </div>
                <div class="content3-grid-item">
                    <h5 class="content3-grid-item-title">Training</h5>
                    <div class="content3-grid-item-body">
                        <div class="content3-body-empty">
                            <p class="content3-body-empty-text">Have done a training?<br>save your certificate!</p>
                        </div>
                    </div>
                    <a href="#">
                        <div class="content3-add-portofolio">
                            <p class="content3-add-portofolio-text">Add Certificate</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="content4">
            <div class="content4-title">
                <h4>Your Company</h4>
            </div>
            <div class="content4-grid">
                <div class="content4-grid-item">
                    <h5 class="content4-grid-item-title">Job.In</h5>
                    <div class="content4-body-grid">
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">Position</p>
                        </div>
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">:</p>
                        </div>
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">Founder</p>
                        </div>
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">Year established</p>
                        </div>
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">:</p>
                        </div>
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">2020</p>
                        </div>
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">Number of vacancies</p>
                        </div>
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">:</p>
                        </div>
                        <div class="content4-body-grid-item">
                            <p class="content4-body-grid-item-text">3</p>
                        </div>
                    </div>
                    <a href="#">
                        <div class="content4-manage">
                            <p class="content4-manage-text">Manage Company</p>
                        </div>
                    </a>
                </div>
                <div class="content4-grid-item">
                    <h5 class="content4-grid-item-title">Other Company</h5>
                    <div class="content4-grid-item-body">
                        <div class="content4-body-empty">
                            <p class="content4-body-empty-text">Do you have a company?<br>manage applicant here!</p>
                        </div>
                    </div>
                    <a href="#">
                        <div class="content4-add-company">
                            <p class="content4-add-company-text">Add Company</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-footer">
            <p class="content-footer-text"><a class="content-footer-link" href="home.php">Job.In</a> © 2020</p>
        </div>
    </div>
</body>

</html>