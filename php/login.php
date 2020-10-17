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
    <link href="../css/register-style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../image/favicon.jpg">
    <title>Job.In</title>
</head>

<!--body section-->

<body>
    <!--navbar-->
    <div class="navbar sticky-top navbar-light">
        <a class="navbar-brand" href="index.html">
            <h1 class="page-title-job">Job<span class="page-title-in">.In</span></h1>
        </a>
    </div>
    <!--content-->
    <div class="content">
        <div class="content-box">
            <div class="title-box">
                <h4 class="title-text">Login</h4>
            </div>
            <div class="form-box">
                <form action="action-login.php" method="POST">
                    <div class="form-grid">
                        <label class="desc-text" for="email">Email</label>
                        <input type="text" id="email" name="email">
                        <label class="desc-text" for="password">Password</label>
                        <input type="password" id="password" name="password">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
            <div class="login-ask">
                <h5 class="login-ask-text">Don't have an account? <a href="../php/register.html"><span class="login-link">Register
                            Instead</span></a></h5>
            </div>
        </div>
    </div>
    <div class="content-footer">
        <p class="content-footer-text"><a class="content-footer-link" href="index.html">Job.In</a> © 2020</p>
    </div>
</body>

</html>