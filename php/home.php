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
    <link href="../css/home-style.css" type="text/css" rel="stylesheet">
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
        <a class="active" href="home.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="browse.php">Browse</a>
        <a href="account.php">Account</a>
        <a href="help.php">Help</a>
        <a href="action-logout.php">Logout</a>
    </div>
    <!--content-->
    <div class="content">
        <div class="content1">
            <div class="content1-title">
                <h1>Welcome to Job.In</h1>
            </div>
            <h3>thousand of companies are waiting for you</h3>
            <div class="content1-search">
                <form action="#search-keyword">
                    <input type="text" id="search-keyword" name="search-keyword" placeholder="Search job or company..">
                </form>
            </div>
        </div>
        <div class="content2">
            <div class="content2-title">
                <h2>Featured Companies</h2>
            </div>
            <div class="content2-grid-container">
                <a href="#">
                    <div class="content2-grid-item">
                        <img src="../image/facebook.jpg" alt="facebook" class="content2-item-layer-bottom">
                        <div class="content2-item-layer-top">
                            <div class="content2-item-hover-text">facebook</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="content2-grid-item">
                        <img src="../image/google.jpg" alt="facebook" class="content2-item-layer-bottom">
                        <div class="content2-item-layer-top">
                            <div class="content2-item-hover-text">google</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="content2-grid-item">
                        <img src="../image/amazon.jpg" alt="facebook" class="content2-item-layer-bottom">
                        <div class="content2-item-layer-top">
                            <div class="content2-item-hover-text">amazon</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="content2-grid-item">
                        <img src="../image/tesla.jpg" alt="facebook" class="content2-item-layer-bottom">
                        <div class="content2-item-layer-top">
                            <div class="content2-item-hover-text">tesla</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="content2-grid-item">
                        <img src="../image/spacex.jpg" alt="facebook" class="content2-item-layer-bottom">
                        <div class="content2-item-layer-top">
                            <div class="content2-item-hover-text">spacex</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="content2-grid-item">
                        <img src="../image/microsoft.jpg" alt="facebook" class="content2-item-layer-bottom">
                        <div class="content2-item-layer-top">
                            <div class="content2-item-hover-text">microsoft</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="content2-grid-item">
                        <img src="../image/tokopedia.jpg" alt="facebook" class="content2-item-layer-bottom">
                        <div class="content2-item-layer-top">
                            <div class="content2-item-hover-text">tokopedia</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="content2-grid-item">
                        <img src="../image/gojek.jpg" alt="facebook" class="content2-item-layer-bottom">
                        <div class="content2-item-layer-top">
                            <div class="content2-item-hover-text">gojek</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="content3">
            <div class="content3-title">
                <h2>News and Articles</h2>
            </div>
            <div class="content3-news-grid">
                <div class="content3-news-grid-item content3-news-grid-item-image">
                    <a href="#">
                        <img src="../image/image200x100.jpg">
                    </a>
                </div>
                <div class="content3-news-grid-item content3-news-grid-item-title">
                    <a href="#">
                        <h5 class="news-title">News Title</h5>
                    </a>
                </div>
                <div class="content3-news-grid-item content3-news-grid-item-desc">
                    <p class="news-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Iste autem illo error, necessitatibus ex, molestiae accusantium, repudiandae voluptate totam sunt dignissimos?
                        Rerum reprehenderit ut earum veritatis eveniet velit minima impedit?</p>
                </div>
            </div>
            <div class="content3-news-grid">
                <div class="content3-news-grid-item content3-news-grid-item-image">
                    <a href="#">
                        <img src="../image/image200x100.jpg">
                    </a>
                </div>
                <div class="content3-news-grid-item content3-news-grid-item-title">
                    <a href="#">
                        <h5 class="news-title">News Title</h5>
                    </a>
                </div>
                <div class="content3-news-grid-item content3-news-grid-item-desc">
                    <p class="news-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Iste autem illo error, necessitatibus ex, molestiae accusantium, repudiandae voluptate totam sunt dignissimos?
                        Rerum reprehenderit ut earum veritatis eveniet velit minima impedit?</p>
                </div>
            </div>
            <div class="content3-news-grid">
                <div class="content3-news-grid-item content3-news-grid-item-image">
                    <a href="#">
                        <img src="../image/image200x100.jpg">
                    </a>
                </div>
                <div class="content3-news-grid-item content3-news-grid-item-title">
                    <a href="#">
                        <h5 class="news-title">News Title</h5>
                    </a>
                </div>
                <div class="content3-news-grid-item content3-news-grid-item-desc">
                    <p class="news-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Iste autem illo error, necessitatibus ex, molestiae accusantium, repudiandae voluptate totam sunt dignissimos?
                        Rerum reprehenderit ut earum veritatis eveniet velit minima impedit?</p>
                </div>
            </div>
            <div class="content3-news-grid">
                <div class="content3-news-grid-item content3-news-grid-item-image">
                    <a href="#">
                        <img src="../image/image200x100.jpg">
                    </a>
                </div>
                <div class="content3-news-grid-item content3-news-grid-item-title">
                    <a href="#">
                        <h5 class="news-title">News Title</h5>
                    </a>
                </div>
                <div class="content3-news-grid-item content3-news-grid-item-desc">
                    <p class="news-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Iste autem illo error, necessitatibus ex, molestiae accusantium, repudiandae voluptate totam sunt dignissimos?
                        Rerum reprehenderit ut earum veritatis eveniet velit minima impedit?</p>
                </div>
            </div>
            <div class="content3-see-other">
                <a href="#">
                    <h4 class="content3-see-other-text">See other news and articles</h4>
                </a>
            </div>
        </div>
        <div class="content-footer">
            <p class="content-footer-text"><a class="content-footer-link" href="home.php">Job.In</a> © 2020</p>
        </div>
    </div>
</body>

</html>