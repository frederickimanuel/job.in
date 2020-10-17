<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "jobin");

/* check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM user_data 
            join user_profile on user_data.user_id = user_profile.user_id
            join user_education on user_data.user_id = user_education.user_id 
            where user_email='$email' and user_password='$password'";


$result = mysqli_query($conn, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);

if ($num_row == 1) {
    while ($row = mysqli_fetch_array($result)) {
        session_start();
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_fname'] = $row['user_fname'];
        $_SESSION['user_lname'] = $row['user_lname'];
        $_SESSION['user_dob'] = $row['user_dob'];
        $_SESSION['user_gender'] = $row['user_gender'];
        $_SESSION['user_nation'] = $row['user_nation'];
        $_SESSION['user_idcard'] = $row['user_idcard'];
        $_SESSION['user_job_status'] = $row['user_job_status'];
        $_SESSION['user_highest_position'] = $row['user_highest_position'];
        $_SESSION['user_education_title'] = $row['user_education_title'];
        header("location:home.php");
    }
} else {
    header("location:login.php");
}
